<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>GoDocs documentation theme</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="godocs" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- plugins -->
    <link rel="stylesheet" href="/js/plugins/bootstrap/bootstrap.min.css">
    <!-- Main Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/image/favicon.ico" type="image/x-icon">

    <!-- 이미지 로딩 시키기 -->
    <link rel="preload" href="/image/main-bg.jpg" as="image">

    <!-- 제이쿼리 -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- bootstrap5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
<header class="sticky-top navigation nav-bg">
    <div class=container>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class=navbar-brand href="/">
                <img class="img-fluid" src="/image/main_logo_61A9ED.png" alt="godocs">
            </a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
                <i class="ti-align-right h4 text-dark"></i></button>
            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="list.html">지역별 여행정보</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="index.html">Now & New</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="search.html">자유게시판</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="search.html">현지구인</a></li>
                </ul>
                <a href="/member/join" class="btn btn-sm btn-light border ml-lg-4">회원가입</a>
                @if (!empty($current_user))
                    <button class="btn btn-sm btn-primary ml-lg-4" id="logout" onclick="logout();">로그아웃</button>
                @else
                    <a href="/member/login" class="btn btn-sm btn-primary ml-lg-4">로그인</a>
                @endif
            </div>
        </nav>
    </div>
</header>
