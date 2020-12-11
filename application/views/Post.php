<html>
<head>
    <title>Post Message</title>
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
    overflow: hidden;
}

.content{
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-35%, -50%);
    width: 600px;
    border-radius: 10px;
}
.container h1{
    padding: 10px 0 20px 0;
    font-family: 'Archivo';
    font-size: 35px;
    color: #b4b4b4;
    font-weight: 900;
    text-align: center;
}

.searchField{
    position: relative;
    margin: 30px 0;
}

.postbtn{
    margin-top: 15px;
    margin-left: 260px;
    width: 150px;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#2780ba,#8e44ad);
    border-radius: 25px;
    font-size: 18px;
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

    <div class = "container">
        <h1>Post Messages</h1>
        <form action="<?php echo site_url('message/dopost'); ?>" method="post">
            
            <div class="content">    
                <div class="postField">
                    <textarea rows="4" cols="50" name="newpost" placeholder="Write something..."></textarea>
                </div>

                <input class="postbtn" type="submit" value="Post Message">
            </div>
        </form>
    </div>

</body>
</html>
