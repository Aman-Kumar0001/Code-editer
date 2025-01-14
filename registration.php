<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Code Ease</title>
    <link rel="icon" href="g-logo.png">
    <!-- <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/9956/9956310.png?uid=R100292432&track=ais"> -->
  
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="commenStyle.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="commenStyle.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Baloo+Bhaina+2&family=Roboto:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            /* font-family: 'Baloo 2', cursive; */

            text-decoration: none !important;
        }

        body {
            overflow-x: hidden;
            background-image: url(./bg-4.jpg);
        }

        html {
            scroll-behavior: smooth;
        }


        ::-webkit-scrollbar-thumb {
            background: #bc7c4a;
            border-radius: 4px;
        }

        ::-webkit-scrollbar {
            background-color: #252525;
            width: .625rem;
        }



        .hidden {
            /* opacity: 0; */
            /* filter: blur(2.5px); */
            /* transform: translateX(-5%); */
            transform: translatey(20%);
            transition: all .7s;
        }

        .show {
            opacity: 1;
            filter: blur(0px);
            /* transform: translateX(0); */
            transform: translateY(0);
        }

        @media(prefers-reduced-motion) {
            .hidden {
                transition: none;
            }
        }

        /*
---------------------------------------------->
 sec-1
 --------------------------------------------->
  */
        .nav-background {
            padding: 4px 0 !important;
            height: auto;
            transition: all 2s ease-in-out;


        }

        .on-scroll {
            /* background: url(bg-2.jpg) no-repeat ;
    background-size: cover; */
            background-color: #00000089;
            backdrop-filter: blur(10px);
            box-shadow: 0 0.125rem 1.75rem 0 rgb(0, 0, 0, 0.03);
            transition: all .15s ease-in-out;
            /* border-radius: 0px 0px 58px 64px; */
            /* padding-bottom: 30px; */
        }

        @media screen and (min-width: 768px) {
            .on-scroll {
                background-color: #57555569;
                backdrop-filter: blur(10px);
                box-shadow: 0 0.125rem 1.75rem 0 rgb(0, 0, 0, 0.03);
                transition: all .15s ease-in-out;
                border-radius: 54px;
                /* padding-bottom: 30px; */
                margin-top: 7px;
                margin-left: 12px;
                width: 98% !important;
            }
        }

        .sec-1-logo {
            font-family: 'Baloo Bhaina 2', cursive;
            font-weight: 900;
            font-size: 35px;
            cursor: pointer;
            background: linear-gradient(90deg, rgba(129, 132, 232, 1) 0%, rgba(158, 186, 230, 1) 18%, rgba(194, 191, 226, 1) 46%, rgba(237, 197, 235, 1) 69%, rgba(238, 174, 202, 1) 87%, rgba(238, 174, 202, 1) 87%, rgba(255, 134, 160, 1) 100%);
            -webkit-background-clip: text;
            color: transparent;

            /* text-shadow: 10px 20px 29px white; */

        }

        @media screen and (min-width:400px) {

            .sec-1-logo {
                font-size: 45px;

            }


        }

        .sec-1-logo:hover {
            background: linear-gradient(90deg, rgba(129, 132, 232, 1) 0%, rgba(158, 186, 230, 1) 18%, rgba(194, 191, 226, 1) 46%, rgba(237, 197, 235, 1) 69%, rgba(238, 174, 202, 1) 87%, rgba(238, 174, 202, 1) 87%, rgba(255, 134, 160, 1) 100%);
            -webkit-background-clip: text;
            color: transparent;

            /* text-shadow: 1px -1px 27px white; */
        }

        .sec-1 a {
            font-weight: 700 !important;
            color: white;
            text-decoration: none;
            transition: 400ms all linear;

            /* font-family: 'Kanit', sans-serif; */
            /* font-family: 'Baloo 2', cursive; */
            font-weight: 500;
        }

        .sec-1:hover a {
            color: #cba16b;
            text-shadow: 1px -1px 17px #cba16b;
            transform: scale(1.1);

        }


        .download-button {
            position: relative;
            border-width: 0;
            color: white;
            font-size: 15px;
            font-weight: 600;
            border-radius: 4px;
            z-index: 1;
        }

        .sec-2-button {
            margin-right: 60px;

        }

        .download-button .docs {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            min-height: 40px;
            padding: 0 10px;
            border-radius: 4px;
            z-index: 1;
            background-color: #242a35;
            border: solid 1px #e8e8e82d;
            transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
        }

        .download-button:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

        }

        .download {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 90%;
            margin: 0 auto;
            z-index: -1;
            border-radius: 4px;
            transform: translateY(0%);
            background-color: #cba16b;
            border: solid 1px #e039012d;
            transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
        }

        .download-button:hover .download {
            transform: translatex(100%)
        }

        .download svg polyline,
        .download svg line {
            animation: docs 1s infinite;
        }

        @keyframes docs {
            0% {
                transform: translateY(0%);
            }

            50% {
                transform: translateY(-15%);
            }

            100% {
                transform: translateY(0%);
            }
        }


        /*
---------------------------------------------->
                          sec-2
 --------------------------------------------->
  */

        .sec-2 {
            background: url(main-background.jpg) no-repeat;
            background-size: cover;
            height: auto;
            color: white;
            /* font-family: 'Baloo 2', cursive; */

        }


        .sec-2-img {

            width: 300px;
            height: 300px;
            margin-top: 100px;
            border-radius: 50%;
            box-shadow: 0px 1px 38px 1px rgba(255, 255, 255, 0.55);
            animation: img1 2s ease-in-out infinite;
            animation-fill-mode: both;
            animation-direction: alternate;

        }

        .sec-2-img:hover {
            animation-play-state: paused;
        }

        @keyframes img1 {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(50px);
            }
        }

        .sec-2-btn {
            background-image: linear-gradient(#bc7c4a, rgb(241, 123, 32));
            color: white;
            font-size: 17px;
            font-weight: 500;

        }

        .sec-2-btn:hover {
            background-image: linear-gradient(#744928, rgb(189, 123, 72));

            color: #ffffff;
            border: 1px solid #cba16b;

        }

        .sec-2-text {
            margin-top: 100px;
            padding-bottom: 100px;
        }

        @media screen and (min-width:992px) {
            .sec-2-text {
                margin-top: 100px;
                padding-bottom: 0px;
            }
        }

        @media screen and (min-width:1200px) {
            .sec-2-text {
                margin-top: 156px;

            }
        }

        .blurStart {
            background-color: rgba(0, 0, 0, 0.096);
            backdrop-filter: blur(6px) !important;
            padding: 54px 28px;
            border-radius: 20px;
        }

        .wave {
            animation-name: wave-animation;
            /* Refers to the name of your @keyframes element below */
            animation-duration: 2.5s;
            /* Change to speed up or slow down */
            animation-iteration-count: infinite;
            /* Never stop waving :) */
            transform-origin: 70% 70%;
            /* Pivot around the bottom-left palm */
            display: inline-block;
            font-size: 40px;
        }

        @keyframes wave-animation {
            0% {
                transform: rotate(0.0deg)
            }

            10% {
                transform: rotate(14.0deg)
            }

            /* The following five values can be played with to make the waving more or less extreme */
            20% {
                transform: rotate(-8.0deg)
            }

            30% {
                transform: rotate(14.0deg)
            }

            40% {
                transform: rotate(-4.0deg)
            }

            50% {
                transform: rotate(10.0deg)
            }

            60% {
                transform: rotate(0.0deg)
            }

            /* Reset for the last half to pause */
            100% {
                transform: rotate(0.0deg)
            }
        }


        .sec-2-img-1 {
            border-image-outset: 1px 2px 3px 2px black;
            border-radius: 30px;
            height: 500px;
        }

        /* For demonstration purposes only: */


        /*
---------------------------------------------->
                          sec-3
 --------------------------------------------->
  */


        .sec-3 {
            /* background-color:#17161b; */
            background: url(bg-4.jpg)no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 100px;
            filter: blur(5px, 5px, 5px);
        }

        @media screen and (min-width:992px) {
            .sec-3 {

                padding-top: 250px;
                padding-bottom: 200px;
            }
        }

        th {
            padding-right: 8px;
            padding-left: 10px;
            padding-bottom: 5px;

        }

        table {}

        .card {
            width: 300px;
            height: 430px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)perspective(2000px);
            background: #fff;
            transform-style: preserve-3d;
            box-shadow: inset 300px 0 50px rgba(0, 0, 0, .5), 0 20px 100px rgba(0, 0, 0, .5);
            transition: 1s;
        }

        .card:hover {
            transform: translate(-50%, -50%) perspective(2000px) rotate(-10deg);
            box-shadow: inset 20px 0 50px rgba(0, 0, 0, .5), 0 10px 100px rgba(0, 0, 0, .5);
        }

        .card:before {
            content: '';
            position: absolute;
            top: -5px;
            left: 0;
            width: 100%;
            height: 5px;
            background: #cba16bff;
            transform-origin: bottom;
            transform: skewX(-45deg)
        }

        .card:after {
            content: '';
            position: absolute;
            top: 0;
            right: -5px;
            width: 5px;
            height: 100%;
            background: #cba16bff;
            transform-origin: left;
            transform: skewY(-45deg);
        }

        .card .imgBox img {
            height: 100%;
            width: 100%;
        }

        .card .imgBox {
            width: 100%;
            height: 100%;
            position: relative;
            transform-origin: left;
            transition: 1s cubic-bezier(.15, 1.7, .84, .58);
        }

        .card:hover .imgBox {
            transform: rotateY(-125deg)
        }

        .card .details {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: boreder-box;
            /* padding:20px; */
            z-index: -1;
        }

        .sec-3-box {
            box-shadow: -1px -1px 10px 8px #141414;
            background: #141414;
            width: 300px;
            height: 300px;
            margin: auto;
            position: relative;
            overflow: hidden;
            margin-top: 100px;
            border-radius: 10px;
        }

        .sec-3-box img {
            width: 100%;
            height: auto;
            transition: all .5s;
        }

        .sec-3-box-1 {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(22, 21, 21, 0.995);
            color: white;
            height: 100%;
            text-align: center;
            /* padding-top: 80px; */
            box-sizing: border-box;
            transform: rotate(-180deg) scale(0);
            transition: all .4s;
            opacity: 0;
        }

        .sec-3-box:hover .sec-3-box-1 {
            transform: rotate(0deg) scale(1);
            transition-delay: .2s;
            opacity: 1;
        }

        .sec-3-box:hover img {
            transform: rotate(-180deg) scale(0);

        }

        .sec-3-pera {
            font-size: 17px;
        }

        /*
---------------------------------------------->
                          sec-4
 --------------------------------------------->
  */

        .sec-4 {
            background-color: #141414;
            padding: 50px 0;

        }

        .container-sec-4 {
            position: relative;
            font-family: sans-serif;
        }

        .container-sec-4::before,
        .container-sec-4::after {
            content: "";
            background-color: #fab5704c;
            position: absolute;
        }

        .container-sec-4::before {
            border-radius: 50%;
            width: 6rem;
            height: 6rem;
            top: 30%;
            right: 47%;
        }

        /* .container-sec-4::after {
    content: "";
    position: absolute;
    height: 3rem;
    top: 37%;
    right: 39%;
    border: 1px solid;
    color: white;
  } */

        .container-sec-4 .box {
            text-align: center;
            width: 17.875em;
            height: 20.875em;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.074);
            border: 1px solid rgba(255, 255, 255, 0.222);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border-radius: .7rem;
            transition: all ease .3s;
        }

        .container-sec-4 .box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .container-sec-4 .box .title {
            font-size: 1.8rem;
            font-weight: 500;
            letter-spacing: .1em;
            color: rgb(237, 236, 236);
        }



        .container-sec-4 .box div p {
            margin: 0;
            font-size: .9em;
            font-weight: 300;
            letter-spacing: .1em;
            color: white;
        }

        .container-sec-4 .box div span {
            font-size: .7rem;
            font-weight: 300;
        }

        .container-sec-4 .box div span:nth-child(3) {
            font-weight: 500;
            margin-right: .2rem;
        }

        .container-sec-4 .box:hover {
            box-shadow: 0px 0px 20px 1px #ffbb763f;
            border: 1px solid rgba(255, 255, 255, 0.454);
        }

        .empty-div {
            width: 160px;
            height: 3px;

            background-color: #bc7c4a;
            border-radius: 40%;
            margin-bottom: 100px;
        }

        .empty-div-1 {
            /* width: 160px ; */
            height: 2px;
            background-color: #bc7c4a;
            border-radius: 20px;
            /* margin-bottom: 100px; */
        }

        /*
---------------------------------------------->
                          sec-5
 --------------------------------------------->
  */


        .sec-5 {
            background: url(bg-3.jpg) no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 50vh;
            scroll-behavior: smooth;


        }



        /*
---------------------------------------------->
                          sec-6
 --------------------------------------------->
  */

        .sec-6 {
            background-color: #141414;
            padding-top: 50px;
            padding-bottom: 100px;
        }

        /* swiper-container {
    width: 100%;
    height: 100%;
  }

  swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  } */


        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: sw </swiper-slidek;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper {
            height: 350px;
            width: 100%;
        }

        .mySwiper2 {
            height: 150px;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper2 swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper2 .swiper-slide-thumb-active {
            opacity: 1;
        }

        swiper-slide img {
            display: sw </swiper-slidek;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* .card-sec-6 {
  position: relative;
  width: 280px;
  height: 320px;
  background: linear-gradient(351deg, rgba(2,0,36,1) 0%, rgba(219,176,120,1) 66%, rgba(214,172,118,1) 78%);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
  padding: 20px 0;
  text-align: center;

}

@media screen and (min-width:500px ) {
  .card-sec-6 {
    position: relative;
    width: 350px;
    height: 300px;
    background: linear-gradient(351deg, rgba(2,0,36,1) 0%, rgba(219,176,120,1) 66%, rgba(214,172,118,1) 78%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
    padding: 20px 0;
  
  }
  .card-sec-6 img {
    height: 100%;
    width: 100%;
    fill: #333;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
  }
  
}
@media screen and (min-width:992px ) {
  .card-sec-6 {
    position: relative;
    width: 300px;
    height: 300px;
    
  
  }
  
  
}
@media screen and (min-width:1200px ) {
  .card-sec-6 {
    position: relative;
    width: 350px;
    height: 300px;
    
  
  }
  
  
}

.card-sec-6 img {
  height: 315px;
  width: 100%;
  fill: #333;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.card-sec-6:hover {
  transform: rotate(-5deg) scale(1.1);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card__content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-45deg);
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #fff;
  opacity: 0;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.card-sec-6:hover .card__content {
  transform: translate(-50%, -50%) rotate(0deg);
  opacity: 1;
   transition-delay: .2s;
}

.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}

.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}

.card-sec-6:hover img {
  scale: 0;
  transform: rotate(-45deg);
} */

        .card-sec-6-container {
            width: 300px;
            height: 300px;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card-sec-6 {
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        .card-sec-6 .front-content {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1)
        }

        .card-sec-6 .front-content p {
            font-size: 32px;
            font-weight: 700;
            opacity: 1;
            background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1)
        }

        .card-sec-6 .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 10px;
            background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
            color: #e8e8e8;
            padding: 20px;
            line-height: 1.5;
            border-radius: 5px;
            pointer-events: none;
            transform: translateY(96%);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card-sec-6 .content .heading {
            font-size: 32px;
            font-weight: 700;
        }

        .card-sec-6:hover .content {
            transform: translateY(0);
        }

        .card-sec-6:hover .front-content {
            transform: translateY(-30%);
        }

        .card-sec-6:hover .front-content p {
            opacity: 0;
        }





        /*
---------------------------------------------->
                          sec-7
 --------------------------------------------->
  */
        /* form */


        .sec-7 {
            /* background: linear-gradient(112deg, rgba(13,13,13,1) 6%, rgba(57,39,12,1) 48%, rgba(228,138,10,1) 100%); */
            background-image: black;
            padding-top: 100px;
            margin-top: -25px;
            padding-bottom: 50px;
        }

        .contact-page {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            /* border: 1px solid white; */
            border-top: 5px solid rgba(217, 140, 24, 0.731);
            backdrop-filter: blur(20px);
        }



        .button-sec-7 {
            height: 50px;
            width: 150px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in-out;
        }

        .button-sec-7:hover {
            box-shadow: .5px .5px 150px #252525;
        }

        .type1::after {
            content: "Thanks";
            height: 50px;
            width: 150px;
            background-color: #bc7c4a;
            color: #fff;
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translateY(50px);
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }

        .type1::before {
            content: " Submit";
            height: 50px;
            width: 150px;
            background-color: #fff;
            color: #bc7c4a;
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translateY(0px) scale(1.2);
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }

        .type1:hover::after {
            transform: translateY(0) scale(1.2);
        }

        .type1:hover::before {
            transform: translateY(-50px) scale(0) rotate(120deg);
        }








        /* footer */
        .site-footer {

            background-image: linear-gradient(45deg, #333232 10%, #0b0b0a 90%);
            /* background: linear-gradient(160deg, rgba(13,13,13,1) 6%, rgba(57,39,12,1) 48%, rgba(228,138,10,1) 100%); */

            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #737373
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: transparent;
            border: 1px dotted white;
            color: white;
        }

        .copyright-text {
            margin: 0
        }

        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #0e0a20
        }

        .social-icons a.whatsapp:hover {
            background-color: #105d04
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.dribbble:hover {
            background-color: #ec2fb0
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }

        .button {
            margin: 0;
            height: auto;
            background: transparent;
            padding: 0;
            border: none;
        }

        /* button styling */
        .button {
            --border-right: 6px;
            --text-stroke-color: rgba(255, 255, 255, 0.6);
            --animation-color: #bc7c4a;
            --fs-size: 2em;
            letter-spacing: 3px;
            text-decoration: none;
            font-size: var(--fs-size);
            font-family: "Arial";
            position: relative;
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px var(--text-stroke-color);
        }

        /* this is the text, when you hover on button */
        .hover-text {
            position: absolute;
            box-sizing: border-box;
            content: attr(data-text);
            color: var(--animation-color);
            width: 0%;
            inset: 0;
            border-right: var(--border-right) solid var(--animation-color);
            overflow: hidden;
            transition: 0.5s;
            -webkit-text-stroke: 1px var(--animation-color);
        }

        /* hover */
        .button:hover .hover-text {
            width: 100%;
            filter: drop-shadow(0 0 23px var(--animation-color))
        }



        .button-sec-6 {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            background: #183153;
            font-family: "Montserrat", sans-serif;
            box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border: none;
        }

        .button-sec-6:after {
            content: " ";
            width: 0%;
            height: 100%;
            background: #e2a82b;
            position: absolute;
            transition: all 0.4s ease-in-out;
            right: 0;
        }

        .button-sec-6:hover::after {
            right: auto;
            left: 0;
            width: 100%;
        }

        .button-sec-6 span {
            text-align: center;
            text-decoration: none;
            width: 100%;
            padding: 18px 25px;
            color: #fff;
            font-size: 1.125em;
            font-weight: 700;
            letter-spacing: 0.3em;
            z-index: 20;
            transition: all 0.3s ease-in-out;
        }

        .button-sec-6:hover span {
            color: #183153;
            animation: scaleUp 0.3s ease-in-out;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.95);
            }

            100% {
                transform: scale(1);
            }
        }

















        .box-sec-7 {
            /* border: 2px solid black; */
            width: 200px;
            height: 300px;
            margin: auto;
            margin-top: 100px;
            position: relative;
            transform: scale3d(1, 1, 1);
            /* transition: all 0.3s ; */
        }

        .box-sec-7>img {
            border-radius: 10px;
            width: 100%;
            height: 100%;
            transition: .2s linear all;

        }

        .container-sec-7-1 {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;


        }

        .container-sec-7-1 img {
            width: 100%;
            height: 100%;
            transition: .4s linear all;

        }

        .box-sec-7:hover>img {

            transform: scale3d(.9, .5, .5);
        }

        .box-sec-7:hover .container-sec-7-1 img {
            margin-top: -120px;
            margin-left: 10px;
            transform: scale3d(2, 2, 2);
            width: 80%;

        }


        @media screen and (min-width:702px) {
            .box-sec-7 {
                /* border: 2px solid black; */
                width: 200px;
                height: 300px;
                margin: auto;
                /* margin-top: 80px; */
                position: relative;
                transform: scale3d(1, 1, 1);
                /* transition: all 0.3s ; */
            }

            .box-sec-7>img {
                border-radius: 10px;
                width: 100%;
                height: 100%;
                transition: .4s all;

            }

            .container-sec-7-1 {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;


            }

            .container-sec-7-1 img {
                width: 100%;
                height: 100%;
                transition: .4s all;

            }

            .box-sec-7:hover>img {

                transform: scale3d(.9, .5, .5);
            }

            .box-sec-7:hover .container-sec-7-1 img {
                margin-top: -120px;
                margin-left: 10px;
                transform: scale3d(2, 2, 2);
                width: 100%;
            }
        }




        .bols_1 {
            z-index: -1;
            width: 150px;
            height: 150px;

            background: linear-gradient(to right, #000000, #4286f4);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            /* position: absolute; */
            filter: blur(8px);
            animation: topside_1 2s ease-in-out infinite;
            animation-direction: alternate;
        }

        @keyframes topside_1 {
            from {
                transform: translatey(-50px);
            }

            to {
                transform: translatey(100px);
            }
        }

        /* new contant add */
        .new-add-btn-work {
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 17px;
            fontweight: 700;
            background-image: linear-gradient(#bc7c4a, rgb(241, 123, 32));
            color: white;
            border: solid 2px rgb(198, 171, 100);
            height: 50px;
            padding: 0px 20px;
            border-radius: 5px;
            font-weight: 600;
            transform: scale(0.89);
            position: relative;

        }

        .new-add-btn-work:not(:hover) .new-add-hide-work,
        .new-add-btn-work:not(:hover) .new-add-icon-work::before,
        .new-add-btn-work:not(:hover) .new-add-icon-work::after {
            opacity: 0;
            visibility: hidden;
            transform: scale(1.4);
        }

        .new-add-hide-work {
            transition: all 0.2s ease;
        }

        .new-add-btn-work:active {
            background-image: linear-gradient(#d7a531, #facc34);
            border-color: #d7b031;
        }

        .new-add-icon-work {
            position: relative;
        }

        .new-add-icon-work::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 6px;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border-radius: 100%;
        }

        .new-add-icon-work::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            transform: translate(-19%, -60%);
            width: 100px;
            height: 33px;
            background-color: transparent;
            border-radius: 12px 22px 2px 2px;
            border-right: solid 2px #ffffff;
            border-top: solid 2px transparent;
        }

        .new-add-icon-work .text-new-add-icon-work {
            color: #ffffff;
            position: absolute;
            font-size: 14px;
            font-weight: 700;
            left: -37px;
            top: -38px;
        }

        .new-add-icon-work svg {
            width: 20px;
            height: 20px;
            border: solid 2px transparent;
            display: flex;
        }

        .new-add-btn-work:hover .new-add-icon-work svg {
            border: solid 2px #ffffff;
        }

        .new-add-padding-left-work {
            position: absolute;
            width: 20px;
            height: 2px;
            background-color: #ffffff;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-left-work:before {
            content: "";
            width: 2px;
            height: 10px;
            background-color: #ffffff;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-left-work:after {
            content: "";
            width: 2px;
            height: 10px;
            background-color: #ffffff;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-left-work-line {
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: #ffffff;
            left: -24px;
            top: 11px;
            transform: rotate(-50deg);
        }

        .new-add-padding-left-work-line::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 6px;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border-radius: 100%;
        }

        .new-add-padding-left-work-text {
            color: #ffffff;
            font-size: 12px;
            position: absolute;
            white-space: nowrap;
            transform: rotate(50deg);
            bottom: 30px;
            left: -67px;
        }

        .new-add-padding-right-work {
            position: absolute;
            width: 20px;
            height: 2px;
            background-color: #ffffff;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-right-work:before {
            content: "";
            width: 2px;
            height: 10px;
            background-color: #ffffff;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-right-work:after {
            content: "";
            width: 2px;
            height: 10px;
            background-color: #ffffff;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .new-add-padding-right-work-line {
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: #ffffff;
            right: -24px;
            top: 11px;
            transform: rotate(50deg);
        }

        .new-add-padding-right-work-line::before {
            content: "";
            position: absolute;
            left: 30px;
            top: 0;
            width: 6px;
            height: 6px;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border-radius: 100%;
        }

        .new-add-padding-right-work-text {
            color: #ffffff;
            font-size: 12px;
            position: absolute;
            white-space: nowrap;
            transform: rotate(-50deg);
            bottom: 34px;
            left: 21px;
        }

        .background {
            position: absolute;
        }

        .background::before {
            content: "";
            position: absolute;
            right: 27px;
            bottom: -70px;
            width: 100px;
            height: 53px;
            background-color: transparent;
            border-radius: 0px 0px 22px 22px;
            border-right: solid 2px #ffffff;
            border-bottom: solid 2px transparent;
        }

        .background::after {
            content: "";
            position: absolute;
            right: 25px;
            bottom: -20px;
            width: 6px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 100%;
        }

        .background-text {
            position: absolute;
            color: #ffffff;
            font-size: 12px;
            bottom: -70px;
            left: -115px;
        }

        .border {
            position: absolute;
            right: 0;
            top: 0;
        }

        .border:before {
            content: "";
            width: 15px;
            height: 15px;
            border: solid 2px #ffffff;
            position: absolute;
            right: 0%;
            top: 0;
            transform: translate(50%, -50%);
            border-radius: 100%;
        }

        .border:after {
            content: "";
            width: 2px;
            height: 25px;
            background-color: #ffffff;
            position: absolute;
            right: -10px;
            top: -15px;
            transform: translate(50%, -50%) rotate(60deg);
        }

        .border .border-text {
            position: absolute;
            color: #ffffff;
            font-size: 12px;
            right: -112px;
            top: -30px;
            white-space: nowrap;
        }


        .new-add-sec-7-img {
            border-radius: 12px;
            border-top: 5px solid rgba(217, 140, 24, 0.731);
            backdrop-filter: blur(20px);
        }

        /* @media screen and (min-width: 768px) {
  .new-add-sec-7-img{
    border-radius: 12px;
    border-top: 5px solid rgba(217, 140, 24, 0.731);
    backdrop-filter: blur(20px);
  }
} */




#bt::after {
  content: "";
  position: absolute;
  top: -5px;
  left: 3%;
  width: 95%;
  height: 10px;
  background-color: #080a0f;
  transition: 0.5s;
  transform-origin: center;
}

#bt::before {
  content: "";
  transform-origin: center;
  position: absolute;
  top: 46px;
  left: 5px;
  width: 95%;
  height: 10px;
  background-color: #080a0f;
  transition: 0.5s;
}

    </style>
</head>




<body>

    <nav class="navbar navbar-expand-lg  nav-background fixed-top w-100 p-5">
        <div class="container-fluid">
            <a class="navbar-brand active sec-1-logo ms-5" href="index.php">
                Code Ease
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered" style="color: #f2f2f2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style=" ">
                <ul class="navbar-nav ms-auto fs-5 fw-bold me-3 text-center">
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link  sec-1" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="HTML.html">HTML</a>
                    </li>

                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="CSS.html">CSS</a>
                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="js.html">JavaScript</a>

                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="editor.html">Code Ease </a>

                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="login.php">login </a>

                    </li>
                    <li class="nav-item active pe-3 sec-1">
                        <a class="nav-link" href="registration.php" style="color: #cba16b">Sign up </a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="login">

        <?php
            require('db.php');
            if (isset($_POST['username']))
            {
                $var = 0;
                if(isset($_POST['Email']))
                {
                $username = ($_POST['username']);
                $Email = ($_POST['Email']);
                $password = ($_POST['password']);
                
                if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
                {
                    $msg = 'The Email you have entered is invalid, please try again.';
                    echo $msg;
                }else{

                    $query = "INSERT INTO `users` (`username`, `password`, `Email`) VALUES ('$username', '$password', '$Email');"; 
                    $result1 = mysqli_query($conn,$query);

                    if($result1)
                    {
                        echo "<div class='form'>
                        <h3>You are registered successfully.</h3>
                        <br/>Click here to start <a href='start.php'>Login</a></div>";
                    }
            }  
            $conn->close();
                }
                    }
            else{
            ?>

        <div class="form">
            <h1>Sign Up</h1>
            <form action="" method="post" name="login">
                <div class="input-container">
                    <input placeholder="Enter username" name="username" class="input-field" type="text">
                    <label for="input-field" class="input-label">Enter username</label>
                    <span class="input-highlight"></span>
                </div>
                <br>
                <div class="input-container">
                    <input type="email" name="Email" class="input-field" placeholder="Enter Email" required>
                    <label for="input-field" class="input-label">Enter Email</label>
                    <span class="input-highlight"></span>
                </div>
                <br>
                <div class="input-container">
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                    <label for="input-field" class="input-label">Enter Password</label>
                    <span class="input-highlight"></span>
                </div>

                <br>
                <button id="bt" name="submit" type="submit" value="Sign Up">Sign Up</button>
            </form><br>
            <p>Already registered ? <a href='login.php'>login</a></p>
        </div>
        <?php } ?>
    </div>


    <!-- Site footer -->
    <footer class="site-footer ">
        <div class="container">
            <div class="row tfs">
                <div class="col-sm-12 col-md-4 ">
                    <h6><button data-text="Awesome" class="button">
                            <span class="actual-text show">&nbsp;Code&nbsp;Ease</span>
                            <span class="hover-text" aria-hidden="true">&nbsp;Code&nbsp;Ease</span>
                        </button></h6>
                    <p class="text-justify show"><i> I'M Aman kumar </i>This is a compact website template that allows
                        users to
                        easily explore new ideas and unleash their creativity. It has been specifically designed as a
                        template for
                        business purposes, providing a solid foundation for creating a professional and visually
                        appealing website.
                        Users can customize and tailor the template to suit their unique business needs, giving them the
                        flexibility
                        to showcase their products, services, and brand in an engaging way.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links show">
                        <li><a href="https://aman-kumar-2004.github.io/reponse-game-website-/" target="_blank">Gaming
                                Website</a></li>
                        <li><a href="https://aman-kumar-2004.github.io/responsive-food-website/" target="_blank">Food
                                Website </a></li>
                        <li><a href="https://ganeshdutt100.github.io/ARC_website.github.io/" target="_blank">ARC </a>
                        </li>
                        <li><a href="https://ganeshdutt100.github.io/Animation/animation_3.html"
                                target="_blank">Animated Web</a>
                        </li>
                        <li><a href="https://ganeshdutt100.github.io/Bicylce-Store/" target="_blank">bicycles</a></li>
                        <li><a href="https://ganeshdutt100.github.io/Flight-Booking-Website/">Royal Yatra</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3 show">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="HTML.html">Html</a></li>
                        <li><a href="js.html">JS</a></li>
                        <li><a href="CSS.html">CSS</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                        <a href="https://github.com/Aman-Kumar-2004 class=" sec-1-logo fs-5 ms-2">Aman Kumar</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 hidden">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com" target="blank"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/the_ganesh_dutt/"><i
                                    class="fa-brands fa-instagram" target="blank"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"
                                    target="blank"></i></a></li>
                        <li><a class="twitter" href="https://github.com/Aman-Kumar-2004" target="blank"><i
                                    class="fa-brands fa-github"></i></a></li>

                        <li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=9125289186" target="blank"><i
                                    class="fa-brands fa-whatsapp"></i></a></li>

                        <li><a class="linkedin" href="tel:+917078404837" target="blank"><i
                                    class="fa-solid fa-phone"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="main-whtapp-icons">
        <div class="whatsapp-icons">
            <a href="https://api.whatsapp.com/send?phone=9125289186" target="blank">
                <img src="whatsapp_icons.png" alt="" width="70px">
            </a>
        </div>
    </div>


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="/main.js"></script>

    </script>
</body>

</html>