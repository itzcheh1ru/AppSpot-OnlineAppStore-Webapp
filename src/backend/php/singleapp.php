<?php
include 'config.php';

if(isset($_POST['submit'])){
    $feedback=$_POST['reviewapp'];

    $sql = "INSERT INTO reviews(feedback) VALUES('$feedback')";

    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully.";
    }
    else{
        echo "Error:" . mysqli_error($con);
    }
}

/*$sql = "SELECT * FROM reviews";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<p id='review'>".$row["feedback"]."</p>";
    }
}else{
    echo "No reviews yet";
}*/

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok</title>
    <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
    <div class="headerContainer">
		<div class="left">
			<a href=""><img src="images/spot.png" type="image/png" class="logo"></a>
			<a href="" class="title">AppSpot</a>
		</div>	
		<div class="center">
			<div class="textBox">
				<a href="test.html" class="text">Home</a>
			</div>
			<div class="textBox">
				<a href="testapps.html" class="text">Apps</a>
			</div>
			<div class="textBox">
				<a href="testgames.html" class="text">Games</a>
			</div>
			<div class="textBox">
				<a href="testcat.html" class="text">Categories</a>
			</div>
		</div>
		<div class="right">
			<div class="search">
				<i class="search-icon"></i>
				<input type="text" maxlength="50" placeholder="Search apps/games">			
			</div>
			<div class="dropdown">
				<a href="userAccount.html"><img src="images/login.svg" class="userIcon"></a>
			</div>
		</div>
	</div>
    <div class="appbox">
        <div class="appdetails">
            <div class="topcontainer">
                 <div class="topcard">
                    <img src="images/daraz.png" class="imgleft">
                    <div class="center_info">
                    <div class="title">TikTok Lite</div>
                    <div class="tip">
                        <div class="tip_item">
                            <div>Contain ads</div>
                            <div class="circle"></div>
                        </div>
                        <div class="tip_item">
                            <div>In-app purchases</div>
                        </div>
                    </div>
                    <div class="bottom_info">
                        <div class="score">
                            <span class="value">4.7</span>
                            <div class="newStarBox starBox_pos">
                                <img src="images/starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
								<img src="images/starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
								<img src="images/starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
								<img src="images/starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
								<img src="images/starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                            </div>
                        </div>
                        <div class="downloads">
                            <span class="value">2M Downloads</span>
                        </div>
                        <div class="grade"></div>
                            <div>Rated 12+</div>
                    </div>
                    </div>
                    <div class="right_install">
                        <a href="" class="install_text">Install</a>
                    </div>
                 </div>  
            </div>
        </div>
        <div class="screenshots">
            <div class="scrimg"><img src="images/appimg1.jpg" alt="img1" class="imgsize"></div>
            <div class="scrimg"><img src="images/appimg2.jpg" alt="img2" class="imgsize"></div>
            <div class="scrimg"><img src="images/appimg3.jpg" alt="img2" class="imgsize"></div>
            <div class="scrimg"><img src="images/appimg4.jpg" alt="img2" class="imgsize"></div>
            <button >></button>
         </div>
         <div class="introcard">
            <div class="introtitle">
                <span class="introtitletxt">Introduction</span>
            </div>
            <div class="intro">
                <span class="introtxt">TikTok is THE destination for mobile videos. On TikTok, short-form videos are exciting, spontaneous, and genuine. Whether you’re a sports fanatic, a pet enthusiast, or just looking for a laugh, there’s something for everyone on TikTok. All you have to do is watch, engage with what you like, skip what you don’t, and you’ll find an endless stream of short videos that feel personalized just for you. From your morning coffee to your afternoon errands, TikTok has the videos that are guaranteed to make your day.</span>
            </div>
        </div>
        <div class="reviewcard">
            <div class="header">
                <div class="title">Ratings & reviews</div>
                <div class="more">
                    <span>View all</span>
                    <img src="images/arrow.svg" alt="more" class="arrow">
                </div>
            </div>
            <div class="rate">
                <div class="rate_left">
                    <div class="rvalue">4.7</div>
                    <div class="users">907 Ratings</div>
                    <form method="post">
                        <textarea name="reviewapp" id="review" rows="5" cols="30" placeholder="Write a review"></textarea>
                        <input type="submit" name="submit" value="Submit" class="submitbtn">
                    </form> 
                    <div class="reviewcontainer">
                        <p id="review"></p>
                    </div>
                </div>
                <div class="rate_right">
                    <div class="star fivestar">
                        <div class="starBox">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                        </div>
                        <div class="progressBar">
                            <div class="fill" style="flex: 5 1 0%"></div>
                            <div class="empty" style="flex: 2 1 0%"></div>
                        </div>
                    </div>
                    <div class="star fourstar">
                        <div class="starBox">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                        </div>
                        <div class="progressBar">
                            <div class="fill" style="flex: 5 1 0%"></div>
                            <div class="empty" style="flex: 2 1 0%"></div>
                        </div>
                    </div>
                    <div class="star threestar">
                        <div class="starBox">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                        </div>
                        <div class="progressBar">
                            <div class="fill" style="flex: 0 1 0%"></div>
                            <div class="empty" style="flex: 7 1 0%"></div>
                        </div>
                    </div>
                    <div class="star twostar">
                        <div class="starBox">
                            <img src="images/starc.svg" alt="star">
                            <img src="images/starc.svg" alt="star">
                        </div>
                        <div class="progressBar">
                            <div class="fill" style="flex: 0 1 0%"></div>
                            <div class="empty" style="flex: 7 1 0%"></div>
                        </div>
                    </div>
                    <div class="star onestar">
                        <div class="starBox">
                            <img src="images/starc.svg" alt="star">
                        </div>
                        <div class="progressBar">
                            <div class="fill" style="flex: 0 1 0%"></div>
                            <div class="empty" style="flex: 7 1 0%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    <div class="aboutcard">
            <div class="title">About</div>
            <div class="detailInfo">
                <div class="left">
                    <div class="appSingleInfo">
                        <div class="info_key">Price</div>
                        <div class="info_value">Free</div>
                    </div>
                    <div class="appSingleInfo">
                        <div class="info_key">Size</div>
                        <div class="info_value">67.5MB</div>
                    </div>
                    <div class="appSingleInfo">
                        <div class="info_key">Version</div>
                        <div class="info_value">3.1.4</div>
                    </div>
                    <div class="appSingleInfo">
                        <div class="info_key">Updated</div>
                        <div class="info_value">5/1/2024</div>
                    </div>
                </div>
                <div class="right">
                    <div class="appSingleInfo">
                        <div class="info_key">App rating</div>
                        <div class="info_value">Rated 12+</div>
                    </div>
                    <div class="appSingleInfo">
                        <div class="info_key">Developer</div>
                        <div class="info_value">TIKTOK pTE. LTD</div>
                    </div>
                    <div class="appSingleInfo">
                        <div class="info_key"><a href="">Privacy policy</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div dir="ltr" class="horizonhomecard">
        <div class="top">
            <span class="left hwtext">New apps we love</span>
            <span class="right">
            More
            <img src="images/arrow.svg" class="arrow">
            </span>
        </div>
        <div class="bottom">
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/so1.png" alt="boc" class="img">
                        <span class="label">Messenger</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/so2.png" alt="boc" class="img">
                        <span class="label">TTelegram</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/so7.png" alt="boc" class="img">
                        <span class="label">Telegram Lit</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/b1.png" alt="boc" class="img">
                        <span class="label">Outlook</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/f1.png" alt="boc" class="img">
                        <span class="label">Smart pay</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/b2.png" alt="boc" class="img">
                        <span class="label">iPay</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/f10.png" alt="boc" class="img">
                        <span class="label">ComBank</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/so4.png" alt="boc" class="img">
                        <span class="label">Snapchat</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
        </div>
        <div style="display: none;">
            <div class="installPopup"></div>
        </div>
        <div class="mask" style="display: none"></div>
    </div>	

    <div dir="ltr" class="horizonhomecard">
        <div class="top">
            <span class="left hwtext">From the same developer</span>
            <span class="right">
            More
            <img src="images/arrow.svg" class="arrow">
            </span>
        </div>
        <div class="bottom">
            <a href="https://www.google.com/?authuser=0" class="app-link">
                <div class="item">
                    <div class>
                        <img src="images/daraz.png" alt="boc" class="img">
                        <span class="label">TikTok Lite</span>
                        <div class="rating">
                            <span class="rcolor">4.2</span>
                            <img src="starc.svg" style="width: 12px; height: 12px; margin: 0px; padding: 0px;">
                        </div>
                        <button class="buton">
                            <div class="buton_txt hwtext">
                                Install
                            </div>	
                        </button>
                    </div>	
                </div>
            </a>
        </div>
        <div style="display: none;">
            <div class="installPopup"></div>
        </div>
        <div class="mask" style="display: none"></div>
    </div>	
</body>
</html>