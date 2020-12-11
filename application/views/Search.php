<html>
<head>
    <title>Search Messages</title>
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

.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px;
    background: #17171f;
    border-radius: 10px;
}

.container h1{
    font-family: 'Archivo';
    font-size: 35px;
    color: #b4b4b4;
    font-weight: 900;
    text-align: center;
    padding: 0 0 20px 0;
}

.container form{
    padding: 0 40px;
    box-sizing: border-box;
}

.searchField{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.searchField input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
    color: white;
}

.searchbtn{
    width: 100%;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#43cea2,#185a9d);
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

    <div class="container">
        <h1>Search for Messages</h1>
        <form action="<?php echo site_url('search/dosearch'); ?>" method="get">

            <div class="searchField">
                <input type="text" name="string" placeholder="e.g. second message">
                <span></span>
            </div>

            <input class="searchbtn" type="submit" value="Search">

        </form>
    </div>

</body>
</html>