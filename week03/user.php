<?php
    require_once 'app.php';

    $user_id = $_GET['id'] ?? 0;

    if($user_id) {
        $user = getUserById($user_id);
    }
    else {
        $user = new stdClass();
    }

    if( isset($_POST['create']) ) {
        $valid = true;
      
        $user->firstname = trim( $_POST['firstname'] );
        $user->lastname = trim( $_POST['lastname'] );
        $user->email = trim( $_POST['email'] );
        $user->password = password_hash( $_POST['password'], PASSWORD_DEFAULT );

        if( empty($user->firstname) || empty($user->lastname) || empty($user->email) || empty($user->password)) {
            $valid = false;
        }

        if ( !$user_id && emailExists( $user->email ) ) {
            echo "Email bestaat al x" ;
            $valid = false;
        }

        if($valid) {
            if($user_id) {
                updateUser($user);
                echo "Succesvol $user_id geupdated";

            } else {
                $user_id = createUser($user);
                echo "Succesvol $user_id aangemaakt";
                header('Location:users.php');
            }
        }
        else {
            //give feedback
            echo 'FAIL';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Create / Edit User</h1>
    <form method="POST">
        <fieldset>
            <legend>Profile</legend>
            <label>
                <span>Firstname</span>
                <input type="text" name="firstname" maxlenght="128" value="<?php echo $user->firstname ?? ''; ?>" required>
            </label>
            <label>
                <span>Lastname</span>
                <input type="text" name="lastname" maxlenght="128" value="<?php echo $user->lastname ?? ''; ?>" required>
            </label>
            <label>
                <span>E-mail</span>
                <input type="email" name="email" maxlenght="256" value="<?php echo $user->email ?? ''; ?>" required>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required>
            </label>
            <label>
                <span>Re-enter Password</span>
                <input type="password" name="password2" required>
            </label>
        </fieldset>
        <fieldset>
            <legend>Personal info</legend>
            <label>
                <span>Phone</span>
                <input type="text" name="phone" maxlenght="28">
            </label>
            <label>
                <span>Street</span>
                <input type="text" name="street" maxlenght="128">
            </label>
            <label>
                <span>Number</span>
                <input type="text" name="number" maxlenght="16">
            </label>
            <label>
                <span>Bus</span>
                <input type="text" name="bus" maxlenght="16">
            </label>
            <label>
                <span>Postalcode</span>
                <input type="text" name="postalcode" maxlenght="16">
            </label>
            <label><span>City</span>
                <input type="text" name="city" maxlenght="128">
            </label>
            <label>
                <span>Country</span>
                <select name="country">
                    <option value="">Select...</option>
                    <option value="be">Belgium</option>
                    <option value="fr">France</option>
                    <option value="nl">Netherlands</option>
                </select>
            </label>
            <label>
                <span>Profile picture</span>
                <input type="file" name="photo" accept="image/png, image/jpeg">
            </label>
        </fieldset>
        <button type="submit" name="create">Voeg toe</button>
    </form>
</body>
</html>