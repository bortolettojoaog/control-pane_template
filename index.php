<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Control Panel</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
		
		<!--Tags para seo-->
		<meta name="description" content="Control Panel" />
		<meta name="keyword" content="control, panel, control panel, administration" />
		<meta name="author" content="João G. Bortoletto" />
		<!----------------->

		<!--Compatibilidade-->
		<meta http-equiv="X-AU-Compatible" content="IE-Edge" />
		<!------------------->

		<!--Estilização-->
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<!--------------->

		<!--Fonts-->
		<!--------->

		<!--Externos-->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<!------------>

	</head>

	<body>

        <section class="left-side">
            <div class="header">
                <h2><a href="">JB<span>Solutions</span></a></h2>
            </div><!--header-->

            <div class="body">
                <div class="container">
                    <nav class="menu">
                        <ul>
                            <li><a href=""><ion-icon name="home-outline"></ion-icon> Home</a></li>
                            <li><a href=""><ion-icon name="ellipsis-vertical-outline"></ion-icon> About</a></li>
                            <li><a href=""><ion-icon name="tv-outline"></ion-icon> Contact</a></li>
                        </ul>
                    </nav>
                </div><!--container-->
            </div><!--body-->
        </section><!--left-side-->

        <section class="right-side">
            <div class="header">
                <div class="container">
                    <div class="button">
                        <h2 id="button-menu"><ion-icon name="list-outline"></ion-icon></h2>
                    </div><!--button-->

                    <div class="search">
                        <div class="icon"><ion-icon name="search-outline"></ion-icon></div><!--icon--><form><input type="text" name="search" placeholder="Search an annotation..." /></form>
                    </div><!--search-->

                    <div class="notification">
                        <p>2</p>
                        <h2><ion-icon name="notifications-outline"></ion-icon></h2>
                    </div><!--notification-->

                    <div class="clear"></div><!--clear-->
                </div><!--container-->
            </div><!--header-->

            <div class="body">
                <div class="left">
                    <div class="container">
                        <div class="welcome">
                            <h2>Welcome, <b>USER</b>!</h2>
                            <p>I wish you will have a great day at work today. Don't forget to check the dashboard information!</p>
                            <p><b>Date:</b> <span id="date"><?php echo 'carregando data...' ?></span></p>
                        </div><!--welcome-->

                        <div id="one" style="width: 100%;" class="box">
                            <h2><ion-icon name="information-outline"></ion-icon> CP - <b>Site informations</b></h2>

                            <div style="background-color: rgb(73, 170, 214);" class="information-single">
                                <h2>Online Users</h2>
                                <p>1</p>
                            </div><!--information-single-->

                            <div style="background-color: rgb(36, 100, 129);" class="information-single">
                                <h2>Total Visits</h2>
                                <p>100</p>
                            </div><!--information-single-->

                            <div style="background-color: rgb(73, 170, 214);" class="information-single">
                                <h2>Visits Today</h2>
                                <p>25</p>
                            </div><!--information-single-->

                            <div class="clear"></div><!--clear-->
                        </div><!--box-->

                        <div id="two" style="width: 49%; margin-right: 1%;" class="box">
                            <h2><ion-icon name="people-outline"></ion-icon> CP - <b>Users</b></h2>

                            <div class="table">
                                <div class="row first">
                                    <div class="col">
                                        <span>Name</span>
                                    </div><!--col-->

                                    <div class="col">
                                        <span>Office</span>
                                    </div><!--col-->

                                    <div class="clear"></div><!--clear-->
                                </div><!--row-->

                                <div class="row">
                                    <div class="col">
                                        <span>User</span>
                                    </div><!--col-->

                                    <div class="col">
                                        <span>Developer</span>
                                    </div><!--col-->

                                    <div class="clear"></div><!--clear-->
                                </div><!--row-->
                            </div><!--table-->
                        </div><!--box-->

                        <div id="three" style="width: 49%; margin-left: 1%;" class="box">
                            <h2><ion-icon name="airplane-outline"></ion-icon> CP - <b>Last Visits</b></h2>

                            <div class="table">
                                <div class="row first">
                                    <div style="width: 20%;" class="col">
                                        <span>Host</span>
                                    </div><!--col-->

                                    <div style="width: 80%;" class="col">
                                        <span>Date</span>
                                    </div><!--col-->

                                    <div class="clear"></div><!--clear-->
                                </div><!--row-->

                                <div class="row">
                                    <div style="width: 20%;" class="col">
                                        <span>0.0.0.1</span>
                                    </div><!--col-->

                                    <div style="width: 80%;" class="col">
                                        <span>24/11/2021 13:02</span>
                                    </div><!--col-->

                                    <div class="clear"></div><!--clear-->
                                </div><!--row-->
                            </div><!--table-->
                        </div><!--box-->

                        <div id="four" style="width: 100%;" class="box">
                            <h2><ion-icon name="bookmark-outline"></ion-icon> CP - <b>Annotation</b></h2>

                            <div class="annotation">
                                <div class="annotation-single">
                                    <h2>Annotation #01</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus volutpat magna, vel eleifend lorem lacinia sit amet. Praesent finibus euismod leo, eget vulputate orci vulputate ut. Etiam congue pulvinar ornare. Fusce ac egestas leo, eget aliquet elit. Quisque dapibus feugiat elit quis placerat. Quisque massa erat, convallis in ex vel, iaculis viverra orci. Sed suscipit accumsan imperdiet.</p>
                                </div><!--annotation-single-->

                                <div class="annotation-single">
                                    <h2>Annotation #02</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus volutpat magna, vel eleifend lorem lacinia sit amet. Praesent finibus euismod leo, eget vulputate orci vulputate ut. Etiam congue pulvinar ornare. Fusce ac egestas leo, eget aliquet elit. Quisque dapibus feugiat elit quis placerat. Quisque massa erat, convallis in ex vel, iaculis viverra orci. Sed suscipit accumsan imperdiet.</p>
                                </div><!--annotation-single-->

                                <div class="annotation-single">
                                    <h2>Annotation #03</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus volutpat magna, vel eleifend lorem lacinia sit amet. Praesent finibus euismod leo, eget vulputate orci vulputate ut. Etiam congue pulvinar ornare. Fusce ac egestas leo, eget aliquet elit. Quisque dapibus feugiat elit quis placerat. Quisque massa erat, convallis in ex vel, iaculis viverra orci. Sed suscipit accumsan imperdiet.</p>
                                </div><!--annotation-single-->
                            </div><!--annotation-->
                        </div><!--box-->

                        <div class="clear"></div><!--clear-->
                    </div><!--container-->
                </div><!--left-->

                <div class="right">
                    <h2><ion-icon name="cloud-upload-outline"></ion-icon> CP - <b>Last updates</b></h2>

                    <div class="container">
                        <div class="records">
                            <div class="record-single">
                                <div class="bullets"></div><!--bullets-->
                                <h3>3 minutes ago.</h3>
                                <h2>New Page Inserted</h2>
                                <p>The <b>about</b> page was inserted by the Developer.</p>
                            </div><!--record-single-->

                            <div class="record-single">
                                <div class="bullets"></div><!--bullets-->
                                <h3>20 minutes ago.</h3>
                                <h2>New Page Inserted</h2>
                                <p>The <b>contact</b> page was inserted by the Developer.</p>
                            </div><!--record-single-->
                        </div><!--records-->
                    </div><!--container-->
                </div><!--right-->

                <div class="clear"></div><!--clear-->
            </div><!--body-->
        </section><!--right-side-->

		<!--Externos-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/script.js"></script>
		<!------------>

	</body>
</html>
