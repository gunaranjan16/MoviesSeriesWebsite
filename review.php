<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="review.css">
    <script type="text/javascript">
    	function checkForm(){
			if(document.form.name.value=="")
			{		alert("Enter your Roll No")
					document.form.name.focus()
					return false;
			}
            else if(document.form.age.value=="")
            {
                alert("Enter your Deparment Name")
                document.form.age.focus()
                return false;
            }
			else if(document.form.movie_name.value=="")
			{
				alert("Enter your Hostel Name")
				document.form.movie_name.focus()
				return false;
			}
			else if(document.form.review.value==="")
			{
				alert("Enter your Review About food")
				document.form.review.focus()
				return false;
			}
			return true;
		}
    </script>
</head>
<body>

<?php
include("auth.php");

// Upload image
if (isset($_ratingS['image'])) {
    $errors = array();
    $rating_name = $_ratingS['image']['name'];
    $rating_size = $_ratingS['image']['size'];
    $rating_tmp = $_ratingS['image']['tmp_name'];
    $rating_type = $_ratingS['image']['type'];
    $rating_ext = strtolower(end(explode('.', $_ratingS['image']['name'])));
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($rating_ext, $extensions) === false) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG rating.";
    }

    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) {
        if (!mkdir($upload_dir, 0777, true)) {
            die('Failed to create directory.');
        }
    }

    $new_rating_path = $upload_dir . $rating_name;
    if (empty($errors)) {
        if (move_uploaded_rating($rating_tmp, $new_rating_path)) {
            echo "Success";
        } else {
            echo "Error uploading rating.";
        }
    } else {
        print_r($errors);
    }
}

// Rest of your code remains the same...


if (isset($_REQUEST['name'])) {
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con, $name);
    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con, $age);
    $movie_name = stripslashes($_REQUEST['movie_name']);
    $movie_name = mysqli_real_escape_string($con, $movie_name);
    $review = stripslashes($_REQUEST['review']);
    $review = mysqli_real_escape_string($con, $review);

    $trn_date = date("Y-m-d H:i:s");

    $targetDir = "uploads/";
    $ratingName = basename($_ratingS["rating"]["name"]);
    $targetratingPath = $targetDir . $ratingName;
    $ratingType = pathinfo($targetratingPath,PATHINFO_EXTENSION);
    move_uploaded_rating($_ratingS["rating"]["tmp_name"], $targetratingPath);

    $query = "INSERT into `foor` (name, age, movie_name, review, trn_date, rating_name) VALUES ('$name', '$age', '$movie_name', '$review', '$trn_date', '$ratingName')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<div class='form'>
            <h3>Your review has been submitted successfully. Go to the Dashboard to see your review.</h3>
        </div>";
    } 
} else {
?>
<h1>Kongu Engineering College</h1>
    <div class="container">
        <h2>Hostel Food Review</h2>
         <form action="#" method="post"  name="form" enctype="multipart/form-data" onsubmit="return checkForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
            	<label for="age">Age:</label>
                <input type="text" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="movie_name">Movie Name:</label>
                <input type="text" id="movie_name" name="movie_name">
            </div>
            <div class="form-group">
                <label for="review">Your Review:</label>
                <textarea id="review" name="review" rows="4"></textarea>
            </div>
            <div class="form-group">
            <label for="rating">Ratings(out of 5):</label>
            <input type="rating" name="rating" id="rating">
             </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
<?php } ?>
</body>
</html>
