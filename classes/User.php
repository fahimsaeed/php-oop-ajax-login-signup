<?php

class User{
    public function login($user, $db){
        if (empty($user['email']) OR empty($user['password'])) {
            return 'missing_fields';
        }

        $sql = "SELECT * FROM users WHERE email=?";
        $statement = $db->prepare($sql);
        
        if (is_object($statement)) {
            $statement->bindParam(1, $user['email'], PDO::PARAM_STR);
            $statement->execute();

            if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                if (password_verify($user['password'], $row->password)) {
                    $_SESSION['logged_in'] = [
                        'id' => $row->id,
                        'name' => $row->name,
                    ];

                    return 'success';
                }

                return 'error';
            }
        }
    }

    public function signup($user, $db){
        //Email existance
        //Password and Confirm Passwords Match
        //All Fields are mandatory
        if (empty($user['fullname']) OR empty($user['email']) OR empty($user['password'])) {
            return "missing_fields";
        } else if ($user['password'] !== $user['confirmpassword']) {
            return "mismatch_password";
        } else if ($this->emailExists($user['email'], $db)) {
            return "email_exists";
        } else {
            $sql = "INSERT INTO users (`name`, `email`, `password`, `verification_code`) VALUES (?,?,?,?)";
            $statement = $db->prepare($sql);

            if (is_object($statement)) {

                $hash = password_hash($user['password'], PASSWORD_DEFAULT);
                $code = generateCode();
                $statement->bindParam(1, $user['fullname'], PDO::PARAM_STR);
                $statement->bindParam(2, $user['email'], PDO::PARAM_STR);
                $statement->bindParam(3, $hash, PDO::PARAM_STR);
                $statement->bindParam(4, $code, PDO::PARAM_STR);
                $statement->execute();

                if ($statement->rowCount()) {
                    return "success";
                }
            }
        }
        return "error";
    }

    public function changePassword($user, $db) {
        //check if the old password is valid
        //new password and confirm password are matched
        //all fields mandatory

        if (empty($user['password']) OR empty($user['newpassword']) OR empty($user['confirmpassword'])) {
            return "missing_fields";
        } else if ($user['newpassword'] !== $user['confirmpassword']) {
            return "mismatch_password";
        } else if (!$this->oldPasswordMatched($user['password'], $db)) {
            return "incorrect_old_password";
        }

        $sql = "UPDATE users SET `password`=? WHERE `id`=?";
        $statement = $db->prepare($sql);

        if (is_object($statement)) {
            $hash = password_hash($user['password'], PASSWORD_DEFAULT);

            $statement->bindParam(1, $hash, PDO::PARAM_STR);
            $statement->bindParam(2, $_SESSION['logged_in']['id'], PDO::PARAM_INT);
            $statement->execute();

            if($statement->rowCount() == 1) {
                return "success";
            }
            return "error";
        }

    }

    private function emailExists($email, $db) {
        $sql = "SELECT * FROM users WHERE email=?";
        $statement = $db->prepare($sql);

        if (is_object($statement)) {
            $statement->bindParam(1, $email, PDO::PARAM_STR);
            $statement->execute();

            if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                return true;
            }
            return false;

            if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                return true;
            }
            return false;
        }
    }

    private function oldPasswordMatched($password, $db) {
        $sql = "SELECT `password` FROM users WHERE id=?";
        $statement = $db->prepare($sql);

        if (is_object($statement)) {
            $statement->bindParam(1, $_SESSION['logged_in']['id'], PDO::PARAM_INT);
            $statement->execute();

            if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                if (password_verify($password, $row->password)) {
                    return true;
                }
            }
        }
        return false;

    }
}

$user = new User;