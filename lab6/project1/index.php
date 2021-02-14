<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
        <p>
        <?php
            echo "Hello World"; 
        ?>
        </p>
        <p>
        <?php
            $myname = "Olasunkanmi";
            $myage = 87;

            echo "My name is ".$myname.", I am ".$myage;
        ?>
        </p>
        <p>
        <?php
        $name = "Olasunkanmi";
            if ($name =="Simon") {
                print "I know you";
            }
                else {
                print "I don't know you";
            }
            ?>
            </P>
            <p>
            <?php
            $wantedgood = "mugs";

            switch($wantedgood) {
            case "spec":
                echo "You have to be 16";
                break;
            case "mugs":
                echo "You have to be 18";
                break;
            case "sausage roll":
                echo "You have to be 21";
                break;
            default:
                echo "You haven't select a thing to buy";
            }
            ?>
            </p>

	</body>
</html>


