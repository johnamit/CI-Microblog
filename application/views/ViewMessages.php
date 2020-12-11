<html>
<head>
    <title>View Message</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Archivo'>
</head>

<style>
*{
    margin: 0;
    padding: 0;  
}

.header {
    width: 100%;
    height: 60px;
    display: block;
    background-color: #101016;
}

.logo{
    padding-top: 15;
    padding-left: 10;
    font-family: 'Archivo';
    font-weight: 900;
    color: white;
    height: 100%;
    font-size: 30px;
    text-align: left;
}

body{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat';
    background: #17171f;
    height: 100vh;
    overflow: auto;
}

.container{
    background: #292947;
    border-radius: 10px;
    padding: 10px;
    margin: 20px 25px;
}

.PostHeader,
.PostMessage{
    color: white;
}

.time{
    color: rgba(255, 255, 255, 0.267);
    font-style: normal;
    text-align: right;
}

.email{
    font-style: italic;
    padding: 10px 0 10px 0;
    border-bottom: 1px solid lightgray;
}

h4{
    float: left;
    padding-right: 10px;
}

.followbtn{
    width: 60px;
    height: 20px;
    border: none;
    background: #2980b9;
    border-radius: 25px;
    color: white;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}



</style>

<body>
    <div class="header">
        <div class="logo">Microblog</div>
    </div>

    <?php foreach($results as $post){ ?>
        <div class ="container">
            <div class="PostHeader">
                <h4><?php echo $post['user_username']; ?></h4>
                <?php if(isset($FButton)==true){ ?>
                    <div class="follow">
                        <a class="button" href="<?php echo site_url('user/follow/'.$user) ?>"><button class="followbtn">Follow</button></a>
                    </div>
                <?php } ?>
                <p class='email'><?php echo "~".$post['email'] ?></p>
            </div>

            <div class="PostMessage">
                <br><p><?php echo $post['text']; ?></p><br><br>
            </div>

            <div class="time">
                <p><?php echo $post['time']; ?></p>
            </div>
        </div>
    <?php } ?>


</body>
</html>