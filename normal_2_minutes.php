<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FN6D6DKXMN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FN6D6DKXMN');
</script>
    <meta charset="UTF-8" />
    <title>TypingTwist.com - Two_Minute_Normal</title>
    <link rel="icon" href="logo2.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<style>
html {
    font-size: .94rem;

}

@media (max-width: 940px) {
    html {
        font-size: .9rem;


    }

}

@media (max-width: 880px) {
    html {
        font-size: .84rem;


    }

}

@media (max-width: 820px) {
    html {
        font-size: .77rem;


    }

}


@media (max-width: 730px) {
    html {
        font-size: .77rem;

        .background {
            display: none;
        }
         .background.move-down {
        display: none !important;
    }

    }

}

@media (max-width: 700px) {
    html {
        font-size: .75rem;

        .background {
            display: none;
        }
        .background.move-down {
        display: none !important;
    }
    }

}


@media (max-width: 650px) {
    html {
        font-size: .71rem;



    }

}

@media (max-width: 600px) {
    html {
        font-size: .68rem;



    }

}


@media (max-width: 570px) {
    html {
        font-size: .65rem;


    }

}

@media (max-width: 540px) {
    html {
        font-size: .63rem;

    }

}

@media (max-width: 520px) {
    html {
        font-size: .6rem;

    }

}

@media (max-width: 490px) {
    html {
        font-size: .56rem;


    }




}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;

}

body {
    min-height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-size: 1.25rem;
    margin: 0;
    padding: 0;


}

/* Default mode background gradient */
body:not(.dark-mode) {
    background: rgb(221, 241, 255);
    background: linear-gradient(90deg, rgba(221, 241, 255, 1) 0%, rgba(209, 242, 255, 1) 47%, rgba(211, 241, 255, 1) 100%);
}

/* Dark mode background color */
body.dark-mode {
    background-color: #222;
    color: #fff;
}



.container {
    background: rgb(243, 252, 255);
    background: linear-gradient(90deg, rgba(243, 252, 255, 1) 0%, rgba(242, 250, 255, 1) 47%, rgba(240, 250, 255, 1) 100%);
    border-radius: 1.25rem;
    padding: 1rem;
    position: absolute;
    margin-top: 20rem;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 0.1rem solid #bac8de;
    width: 48rem;
    align-items: center;
    justify-content: center;
}




.container .input-field {
    z-index: -999;
    opacity: 0;
    position: absolute;
}

.content-box .text-of-typing {
    max-height: 21.875rem;
    /* 350px */
    max-width: 38rem;
    /* 600px */
    overflow: hidden;
}

.content-box .text-of-typing::-webkit-scrollbar {
    width: 0;
}

.dark-mode {
    --blinking-color: white; /* Color for dark mode */

    .container {
        background: #2b2b2b;

    }

    .paragraphsection {
        background: #3f3f40;
        color: white;
    }

    .flip-card-front {
        background: #3f3f40;
    }

    .paragraphtext {
        color: white;
    }

    .paragraphtext1 {
        color: white;
    }

    .content-box.noob .text-of-typing p {
        color: white;
    }

    .content-box.pro .text-of-typing p {
        color: white;
    }

    #start-message {
        color: white;
    }

    .background {
        background: #2b2b2b;
    }

    .container button {
        background: #2b2b2b;
    }

    .achievement-box {
        background: #2b2b2b;
    }

    .achievement-chart-box {
        background: #2b2b2b;
    }

    button#home-btn {
        background: #2b2b2b;
    }

    button#try-again-achievement-btn {
        background: #2b2b2b;
    }

    #achievement-remarks {
        color: white;
    }

    .sidebar {
        background: #666666;
    }

    .sidebar li a {
        background: none;
    }

    .sidebar .logo_details #btn {
        background: #666666;
    }

    footer {
        color: white;
    }
    

}

.content-box.noob .text-of-typing p {
    text-align: justify;
    font-size: 2.15625rem;
    /* 34.5px */
    letter-spacing: 0.2rem;
    word-spacing: .9rem;
    /* 2px */
    line-height: 2.5;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;
    margin-top: -.5rem;
}

.content-box.pro .text-of-typing p {
    text-align: justify;
    font-size: 2rem;
    /* 32px */
    line-height: 1.78;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;


}

.content-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.content-box .content {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 17%;
    text-align: center;
    line-height: 1.25rem;
    /* 20px */
}

.content .result {
    padding: 1.3rem;
    /* 19px */
    border-radius: 3.625rem;
    /* 10px */
    display: block;
    text-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.5);

}

.content .result li {

    /* 1px */
    list-style: none;
}

.content .result li:last-child {
    border-bottom: none;

}

.result li.time,
.result li.errors,
.result li.wpm,
.result li.cpm {
    font-size: 1.16rem;
    color: WHITE;

    /* 20px */
}

.result li.time p,
.result li.errors p,
.result li.wpm p,
.result li.cpm p {

    margin-bottom: .2rem;


}

.container button {
    position: absolute;
    cursor: pointer;
    font-size: .9rem;
    /* 18px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4rem 1.3rem;
    border: 0.1rem solid #bac8de;
    /* 3.5px */
    border-radius: 0.125rem;
    /* 2px */
    box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.16), 0 0.1875rem 0.375rem rgba(0, 0, 0, 0.1);
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: -.4rem;
    /* 20px */

}

.container button:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

.container button:hover,
.container button:focus {
    color: white;
    transform: scale(1.10);
}

.container button:hover:before,
.container button:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

.container button:active {
    transform: scale(0.9);
}

.text-of-typing p span.correct {
    color: rgb(15, 235, 15);
}

.text-of-typing p span.incorrect {
    color: rgb(236, 25, 25);
}

#page {
    display: flex;
    justify-content: center;
    align-items: center;
}

#container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-top: 15rem;
}

#h3 {
    color: rgb(82, 79, 79);
    font-size: 1.625rem;
    /* 26px */
    margin-top: 1.25rem;
    text-align: center;
    line-height: 2.5rem;
    /* 40px */
}


#ring {
    width: 24.375rem;
    /* 390px */
    height: 24.375rem;
    /* 390px */
    border: 0.0625rem solid transparent;
    /* 1px */
    border-radius: 50%;
    position: absolute;
}


#ring:nth-child(1) {
    border-bottom: 0.5rem solid rgb(240, 42, 230);
    /* 8px */
    animation: rotate1 2s linear infinite;
}


@keyframes rotate1 {
    from {
        transform: rotateX(50deg) rotateZ(110deg);
    }

    to {
        transform: rotateX(50deg) rotateZ(470deg);
    }
}

#ring:nth-child(2) {
    border-bottom: 0.5rem solid rgb(240, 19, 67);
    animation: rotate2 2s linear infinite;
}

@keyframes rotate2 {
    from {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(20deg);
    }

    to {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(380deg);
    }
}

#ring:nth-child(3) {
    border-bottom: 0.5rem solid rgb(3, 170, 170);
    animation: rotate3 2s linear infinite;
}

@keyframes rotate3 {
    from {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(450deg);
    }

    to {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(90deg);
    }
}

#ring:nth-child(4) {
    border-bottom: 0.5rem solid rgb(207, 135, 1);
    animation: rotate4 2s linear infinite;
}

@keyframes rotate4 {
    from {
        transform: rotateX(70deg) rotateZ(270deg);
    }

    to {
        transform: rotateX(70deg) rotateZ(630deg);
    }
}

.achievement-box {
    display: none;
    position: absolute;
    margin-top: 18rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;


}

.achievement-box h2 {
    font-size: 2.5rem;
    /* 40px */
}

.achievement-box p {
    font-size: 2rem;
    /* 32px */
    margin: .1rem;
    /* 15px */
}


.achievement-box span {
    font-weight: bold;
    color: #ffc107;
}



button#try-again-achievement-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    font-style: normal;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);

    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: .5rem;
    /* 20px */
    margin-left: 9.5rem;
    /* 115px */
}

button#home-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    font-style: normal;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    /* Set the background color to match the achievement box color */
    margin-left: -18.5rem;
    /* -280px */
    margin-top: .5rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    /* 20px */
}

/* Pseudo-element for the buttons */
button#try-again-achievement-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

button#home-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}


/* Hover and focus styles for the buttons */
button#try-again-achievement-btn:hover,
.button#try-again-achievement-btn:focus {
    color: white;
    transform: scale(1.10);
}

button#home-btn:hover,
.button#home-btn:focus {
    color: white;
    transform: scale(1.10);
}

/* Pseudo-element hover and focus styles */
button#try-again-achievement-btn:hover:before,
.button#try-again-achievement-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

button#home-btn:hover:before,
.button#home-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

/* Active style for the buttons */
button#try-again-achievement-btn:active {
    transform: scale(0.9);
}

button#home-btn:active {
    transform: scale(0.9);
}

/* Switch button styles */
.switch {
    font-size: 0.9rem;
    position: relative;
    display: inline-block;
    width: 10rem;
    /* Adjusted from 150px */
    height: 1.4rem;
    margin-left: 16.5rem;
    /* Adjusted from 18rem */
    margin-top: -1rem;
}

/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    color: black;
    font-weight: 600;
    border-radius: 3rem;
    /* Adjusted from 30px */
    display: flex;
    justify-content: space-around;
    align-items: center;
    transition: 0.4s;
}

.slider:before {
    position: absolute;
    content: "Expert";
    height: 90%;
    width: 4.8rem;
    /* Adjusted from 48% */
    left: 2%;
    border-radius: 2rem;
    /* Adjusted from 20px */
    background-color: white;
    color: black;
    display: grid;
    align-content: center;
    justify-content: center;
    box-shadow: 0 0.1rem 0.1rem 0 rgba(0, 0, 0, 0.2), 0 0.2rem 0.4rem 0 rgba(0, 0, 0, 0.2), 0 -0.1rem 0 0 rgba(0, 0, 0, 0.1) inset, 0 -1.31rem 1.31rem -1.31rem rgba(0, 0, 0, 0.3) inset, 0 0 0.1rem 0 rgba(0, 0, 0, 0.1);
    text-shadow: 0 -0.1rem 0 rgba(0, 0, 0, 0.15);
    transition: 0.4s;
}

.slider:after {
    content: "";
    position: absolute;
    top: -0.7rem;
    /* Adjusted from -7px */
    left: -0.7rem;
    /* Adjusted from -7px */
    right: -0.7rem;
    /* Adjusted from -7px */
    bottom: -0.7rem;
    /* Adjusted from -7px */
    border-radius: 1.71rem;
    /* Adjusted from 1.71em */
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.1));
    z-index: -1;
}

.switch input:checked+.slider {
    background-color: white;
    color: black;
}

.switch input:checked+.slider:before {
    content: "Normal";
    transform: translateX(100%);
    color: black;
}

.switch input {
    display: none;
}

.circle-container {
    display: flex;
    justify-content: space-between;
    margin-top: .25rem;
    /* 20px */
}

.circle {
    width: 11.75rem;
    /* 140px */
    height: 11.75rem;
    /* 140px */
    background-color: black;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 0.1875rem solid #0084ff;
    /* 3px */
}

.circle-label {
    font-size: 2.1rem;
    /* 25px */
    font-weight: bold;

    color: black;
    text-decoration-color: #000;
}

.circle-value {
    font-size: 2rem;
    /* 29px */
    font-weight: bold;
    color: #0084ff;
    margin-top: -.5rem;
}

/* Add this CSS for the symbols */
.symbol {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    /* 32px */
    font-weight: bold;
    width: 2.5rem;
    /* 40px */
    height: 2.5rem;
    /* 40px */
    background-color: #0084ff;
    border-radius: 50%;
    color: white;
    margin-right: 0.0625rem;
    /* 1px */
    margin-top: 4.25rem;
    /* 52px */
}

.equal-symbol {
    font-size: 1.875rem;
    /* 30px */
}


.dark-mode-toggle {
    position: absolute;
    top: .15rem;
    /* 20px */
    right: .1rem;
    /* 20px */
    display: inline-block;
    border: 0.1rem solid #0084ff;
    /* 2px */
    border-radius: 1.9rem;

    height: 1.45rem;
    width: 3rem;


}

.toggle-label {
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    padding: 0.3125rem;
    /* 5px */
    /* 15px */
    transition: background-color 0.3s;
    height: 1.3rem;
    width: 2.5rem;
    left: .27rem;


}

.toggle-checkbox {
    display: none;



}

.toggle-label::after {
    content: "";
    position: absolute;
    top: .1rem;
    /* 5px */
    left: -.1rem;
    /* 5px */
    width: 1.025rem;
    /* 26px */
    height: 1.025rem;
    /* 26px */

    border-radius: 50%;
    transition: left 0.3s;
    background-color: #000000;

}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.8125rem);
    /* 29px */


}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.3rem);
    /* 29px */
    background-color: white;
}

.dark-mode {
    background-color: #222;
    color: #fff;
}

#h3 {
    color: #0084ff;
}

#start-message {
    color: black;

    margin-left: -.7rem;
    /* -19px */

    font-size: 0.9375rem;
    /* 15px */
    margin-bottom: -1rem;
    /* -38px */
    border: 0.625rem;
    animation: bounce 1s infinite;
    margin-top: -1rem;
}

@keyframes bounce {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-0.9375rem);
        /* -15px */
    }
}


:root {
    --blinking-color: #00f; /* Default color for light mode */
}

.blinking-line {
    border-bottom: 0.125rem solid var(--blinking-color);
    animation: blink-border 0.5s infinite alternate;
}

@keyframes blink-border {
    0% {
        border-color: transparent;
    }

    100% {
        border-color: var(--blinking-color);
    }
}

#ul1 {
    background: black;
    margin-left: 2.95rem;
    /* 20px */
    height: 11.375rem;
    /* 230px */
    border: 0.1rem solid #0084ff;
    line-height: -3rem;

    /* 2px */
}

#t1 {
    margin-top: 2.8125rem;
    /* 45px */
}

#t2 {
    font-style: bold;
    font-size: 1.25rem;
    /* larger */
}

#Ach1 {
    font-size: 2.8125rem;
    /* 45px */
    color: #0084ff;
    font-weight: bold;
}

.tooltipexp {
    visibility: hidden;
    width: 10rem;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: .4rem;
    padding: .2rem;
    position: absolute;
    z-index: 1;
    bottom: 110%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
    font-size: .8rem;
}

.switch:hover .tooltipexp {
    visibility: visible;
    opacity: 1;
}

.tooltipdarkmood {
    visibility: hidden;
    width: 3rem;
    /* Adjust the width as needed */
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 1rem;
    font-size: .8rem;
    position: absolute;
    z-index: 1;
    bottom: -30%;
    left: -40%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
}

.toggle-label:hover .tooltipdarkmood {
    visibility: visible;
    opacity: 1;
}

#achievement-remarks {
    font-size: 1.89rem;
}


:root {
    --color-default: #004f83;
    --color-second: #0067ac;
    --color-white: #fff;
    --color-body: #e4e9f7;
    --color-light: #e0e0e0;
}

.sidebar {
    min-height: 100vh;
    ;
    /* 100vh / 16px = 6.25rem */
    width: 4.875rem;
    /* 78px / 16px = 4.875rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    z-index: 99;
    background-color: #38bcd6;
    transition: all 0.5s ease;
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar.open {
    width: 14.375rem;
    /* 230px / 16px = 14.375rem */
}

.sidebar .logo_details {
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    display: flex;
    align-items: center;
    position: relative;
}

.sidebar .logo_details .icon {
    opacity: 0;
    transition: all 0.5s ease;
}

.sidebar .logo_details .logo_name {
    color: var(--color-white);
    font-size: 1.375rem;
    /* 22px / 16px = 1.375rem */
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;


}

.sidebar.open .logo_details .icon,
.sidebar.open .logo_details .logo_name {
    opacity: 1;
}

.sidebar .logo_details #btn {
    position: absolute;
    margin-top: 3rem;
    right: 0;
    transform: translateY(-50%);
    font-size: 2.4375rem;
    /* 23px / 16px = 1.4375rem */
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.open .logo_details #btn {
    text-align: right;
    font-size: 2rem;
}

.sidebar i {
    color: var(--color-white);
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    line-height: 3.75rem;
    min-width: 3.125rem;
    /* 50px / 16px = 3.125rem */
    font-size: 1.5625rem;
    /* 25px / 16px = 1.5625rem */
    text-align: center;

}

.sidebar .nav-list {
    margin-top: 1.25rem;
    /* 20px / 16px = 1.25rem */
    height: 100%;
}

.sidebar li {
    position: relative;
    margin: 0.5rem 0;
    /* 8px / 16px = 0.5rem */
    list-style: none;
    margin-top: 1.7rem;
}

.sidebar li .tooltip {
    position: absolute;
    top: -1.25rem;
    /* -20px / 16px = -1.25rem */
    left: calc(100% + 0.9375rem);
    /* 15px / 16px = 0.9375rem */
    z-index: 3;
    background-color: var(--color-white);
    box-shadow: 0 0.3125rem 0.625rem rgba(0, 0, 0, 0.3);
    /* 5px / 16px = 0.3125rem, 10px / 16px = 0.625rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 400;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    color: #000;
    border: solid #38bcd6 .1rem;
}

.sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar.open li .tooltip {
    display: none;
}

.sidebar input {
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    color: var(--color-white);
    font-weight: 400;
    outline: none;
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    width: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    border: none;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    background-color: var(--color-second);
    transition: all 0.5s ease;
}

.sidebar input::placeholder {
    color: var(--color-light);
}



.sidebar.open input {
    width: 100%;
    padding: 0 1.25rem 0 3.125rem;
    /* 20px / 16px = 1.25rem, 50px / 16px = 3.125rem */
}

.sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    text-decoration: none;
    background-color: var(--color-default);
    position: relative;
    transition: all 0.5s ease;
    z-index: 12;
    background-color: #38bcd6;
}

.sidebar li a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    transform: scaleX(0);
    background-color: var(--color-white);
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    transition: transform 0.3s ease-in-out;
    transform-origin: left;
    z-index: -2;
}

.sidebar li a:hover::after {
    transform: scaleX(1);
    color: var(--color-default);
}

.sidebar li a .link_name {
    color: var(--color-white);
    font-size: 1.4375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 500;
    white-space: nowrap;
    pointer-events: auto;
    transition: all 0.4s ease;
    pointer-events: none;
    opacity: 0;
}

.sidebar li a:hover .link_name,
.sidebar li a:hover i {
    transition: all 0.5s ease;
    color: var(--color-default);
}

.sidebar.open li a .link_name {
    opacity: 1;
    pointer-events: auto;
}

.sidebar li i {
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    line-height: 2.1875rem;
    font-size: 1.7rem;
    /* 18px / 16px = 1.125rem */
    border-radius: 0.3125rem;

    /* 5px / 16px = 0.3125rem */
}


@media (max-width: 730px) {

    /* Adjust the max-width value based on your design requirements */
    .sidebar {
        width: 0;
        padding: 0;
        transition: all 0.5s ease;

    }

    .sidebar.open {
        width: 13.375rem;
        /* or any width you want for the opened sidebar */

    }

    .sidebar .logo_details {
        display: flex;
        justify-content: space-between;
        padding: .375rem 1.75rem;

    }

    .logo_details {
        font-size: 2rem;
    }

    .sidebar .logo_details #btn {

        font-size: 3.5rem;
        color: white;
        background-color: #38bcd6;
    }

    .sidebar .logo_details .logo_name {

        display: none;

    }



    .sidebar.open .logo_details .logo_name {
        display: block;

    }

    .sidebar .nav-list {
        display: none;
    }

    .sidebar.open .nav-list {
        display: block;
    }

    .sidebar.open .logo_details #btn {
        text-align: right;
        font-size: 3rem;
    }
}

.achievement-chart-box {
    display: none;
    position: absolute;
    margin-top: 46rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;
    height: 22rem;

}

.flip-card.move-down {
    margin-top: 65rem;
    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;

    #img {
        width: 13rem;
    }

}

.background.move-down {
    height: 181rem;
}



.flip-card {

    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;
    /* Adjusted from 25.4rem */

    /* Adjusted from 100rem */
    font-family: sans-serif;
    font-style: normal;
    position: absolute;
    left: 50%;
    margin-top: 48.2rem;
    /* Adjusted from 35rem */


}

.title {
    font-size: 1.59rem;
    /* Adjusted from 1.5rem */

    text-align: center;
    margin: 0;
    color: #2a91d1;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    pointer-events: auto; /* Ensure the hover effect works on the card itself */

}

.flip-card:hover .flip-card-inner {
    transform: scale(0.9);
}

.flip-card-front {
    /* Adjusted from 0.8rem 1.4rem */
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border: 0.1rem solid #bac8de;
    /* Adjusted from 0.1rem */
    border-radius: 1.06rem;
    /* Adjusted from 1rem */
}

.flip-card-front {
    color: #00bbeb;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
}



#img {
    margin-top: .2rem;
    margin-left: .3rem;
    width: 13rem;
    height: 9.5rem;
    border-radius: 1rem;


}

.text3 {
    margin-left: -19rem;
        margin-top: -6rem;
        position: absolute;
        color: #2a91d1;
        font-weight: bold;
        font-size: 1.7rem;
        z-index: 1;
        border: 1rem solid none;
        border-style: none;
        width: 28rem;
        font-family: 'Arial Black', Gadget, sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        pointer-events: none; /* Prevent the heading from triggering any hover effects */



}
.paragraphsection.move-down{
    margin-top: 90rem;
}
.paragraphsection {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 76rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    height: 63.5rem;
    width: 48rem;
    border-radius: 1rem;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    background-color: #dfe8e5;
   
    padding: 1rem;
  
}

.paragraphtext {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.paragraphtext1 {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    margin-top: 31.6rem;
    margin-left: 21rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.btt {
    width: 12rem;
    height: 4rem;
    border: .1rem solid #343a40;
    border-radius: 3rem;
    transition: all 0.3s;
    margin-left: 16rem;
    background: white;
    font-size: 1rem;
    position: absolute;
    font-family: "Montserrat", sans-serif;
    margin-top: 65rem;
    color: black;
    font-style:normal;
}

.btt:hover {
    background: #343a40;
    color: white;
    font-size: 1.3rem;
}

.background {
    position: absolute;
    left: 50%;
    width: 57rem;
    height: 166.5rem;
    transform: translateX(-50%);
    z-index: -1;
    margin-top: -15rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    border: solid .1rem #32323233;

}
footer.move-down{
    margin-top: 161rem;
}
footer {

    color: black;
    padding: 20px;
    text-align: center;
    margin-top: 147rem;
    margin-left: -1.5rem;
    width: 100%;
    position: absolute;
    font-size: 1rem;
}

footer p {
    margin: 0;
}
.progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 0%;
    height: .17rem; /* Adjust height as needed */
    background-color: #007bff; /* Progress bar color */
    z-index: 1;
    opacity: 0; /* Initially hidden */
    transition: width 1s ease-in-out, opacity 0.3s ease-in-out;
    box-shadow: 0px .5rem .5rem rgba(0, 0, 0, 0.20);
}
@media screen and (min-width: 344px) and (max-width: 767px) {
.container {
    padding: 4rem;
    
    }
    
.container button {
  
    margin-top: 2rem;

}   
}
</style>

<body>
<div class="progress-bar" id="top-progress-bar"></div>
<div class="dark-mode-toggle" style="margin-top:.2rem;">
        <input type="checkbox" id="darkModeToggle" class="toggle-checkbox">
        <label for="darkModeToggle" class="toggle-label">
            <div class="tooltipdarkmood">Mood</div>
        </label>
    </div>
    <div class="sidebar">
        <div class="logo_details">

            <div class="logo_name">Typing Twist</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">

            <li>
                <a href="index.php">
                    <i class="bx bx-laptop"></i>
                    <span class="link_name">Typing Test</span>
                </a>
                <span class="tooltip">TYPING TEST</span>
            </li>
            <li>
                <a href="learntyping.php">
                    <i class="bx bx-search"></i>
                    <span class="link_name">Typing Lab</span>
                </a>
                <span class="tooltip">TYPING LAB</span>
            </li>
            <li>
                <a href="typinggame.php">
                    <i class="bx bx-joystick"></i>
                    <span class="link_name">Typing Games</span>
                </a>
                <span class="tooltip">TYPING GAMES</span>
            </li>
            <li>
                <a href="typingtips.php">
                    <i class="bx bx-star"></i>
                    <span class="link_name">Typing Tips</span>
                </a>
                <span class="tooltip">TYPING TIPS</span>
            </li>
            <li>
                <a href="feedback.php">
                    <i class="bx bx-comment"></i>
                    <span class="link_name">Feedback</span>
                </a>
                <span class="tooltip">FEEDBACK</span>
            </li>
            <li>
                <a href="contact.php">
                    <i class="bx bx-map-pin"></i>
                    <span class="link_name">Contact us</span>
                </a>
                <span class="tooltip">CONTACT US</span>
            </li>
            <li>
                <a href="blog.php">
                    <i class="bx bx-link"></i>
                    <span class="link_name">Blog</span>
                </a>
                <span class="tooltip">BLOG</span>
            </li>
        </ul>
    </div>
    <div>
        <footer class="ftt" id="ft">
        <p>&copy; 2024 Typing Twist. All rights reserved.</p>
        </footer>
    </div>
    <div class="background" id="bg1"></div>
    <div class="container">

        <div class="myclass">
            <label class="switch" for="switchMode">
                <input type="checkbox" id="switchMode" checked>
                <div class="slider">
                    <span>Expert</span>
                    <span>Normal</span>
                </div>
                <div class="tooltipexp">Select your Experience</div>
            </label>
        </div>

        <div id="start-message" class="fa-bounce">Start Here</div>
        <input type="text" class="input-field">

        <div class="content-box">

            <div class="text-of-typing" id="text-container">
                <p></p>

            </div>
            <div class="content">
                <ul id="ul1" class="result">
                    <li class="time" id="t1">
                        <p id="t2" title="Time">Time</p>
                        <span id="time">2:00</span>
                    </li>
                    <li class="errors" style="display:none;">
                        <p>Errors</p>
                        <span>0</span>
                    </li>
                    <li class="wpm" style="display:none;">
                        <p>WPM</p>
                        <span>0</span>
                    </li>
                    <li class="cpm" style="display:none;">
                        <p>CPM</p>
                        <span>0</span>
                    </li>
                </ul>

            </div>
        </div>

        <button id="try-again-btn" title="Try Again">Try Again</button>
    </div>
    <div class="loader" style="display: none;">
        <div id="page">
            <div id="container">
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="h3"><B><I>WAIT FOR <BR>YOUR ACHIEVEMENT..</div>
            </div>
        </div>
    </div>
    <div class="achievement-box" style="display: none;">
        <span class="close-btn" id="close-achievement" title="close"></span>
        <p id="Ach1"><i class="fa-solid" style="color: #edfd77;"></i>
            Achievement Unlocked!</p>
        <div class="circle-container">
            <div class="circle accuracy-circle">
                <span class="circle-label" title="Accuracy Erros">Accuracy</span>
                <span class="circle-value" id="achievement-accuracy">100%</span>
            </div>
            <div class="symbol">X</div>
            <div class="circle cpm-circle">
                <span class="circle-label" title="Count Per Minute">CPM</span>
                <span class="circle-value" id="achievement-cpm">0</span>
            </div>
            <div class="symbol">=</div>
            <div class="circle wpm-circle">
                <span class="circle-label" Title="Word Per Minute">WPM</span>
                <span class="circle-value" id="achievement-wpm">0</span>
            </div>

        </div>
        <p id="achievement-remarks"></p>
        <button id="try-again-achievement-btn" title="Try Again">Try Again</button>
        <button id="home-btn" title="Home">Home</button>
    </div>

    <div class="achievement-chart-box" style="display: none;" title="Your Achievement Chart">

        <canvas id="achievement-chart"></canvas>

    </div>

    <div class="flip-card" id="card" style="margin-left: 9rem;">
        <div class="text3" style="font-weight:italic" >Time for typing games!

        <img src="./image/svg/game1.svg"
        style="height:3.2rem; width:3.2rem; position:absolute; top:-.1rem; margin-left:-25.6rem" alt="">

        </div>
        <div class="flip-card-inner" id="card">
        <a href="typinggame.php">
            <div class="flip-card-front">
            <img src="./image/car.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">CAR RACING</p>
                    <p style="font-size:1rem; color: #2a91d1;">Race Around the Typing Track.</p>
            </div>
            </a>
        </div>
    </div>
    <div class="flip-card" id="card2" style="margin-left: -7rem;">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/balloon.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">BALLOON KEY</p>
                    <p style="font-size:1rem; color: #2a91d1;">Balloon Key Float Up with Fast Fingers</p>
                </div>
                </a>

        </div>
    </div>

    <div class="flip-card" id="card3" style="margin-left: -23rem">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/BALLS.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">KEY BALLS</p>
                    <p style="font-size:1rem; color: #2a91d1; ">Unleash Speed, Control the Balls.</p>
                </div>
                </a>
        </div>
        </div>

        <div class="paragraphsection" id="para2">
            <img src="./image/svg/tip.svg" alt=""
                style="height:2.9rem; width:2.9rem; position:absolute; top:-6.5rem; margin-left:9.9rem">
            <H4 style="margin-top:-7rem; margin-left:13rem;  position: absolute;color: #2a91d1;font-weight: bold;font-size: 1.7rem;z-index: 1; border: 1rem solid none; border-style: none;
        width: 35rem;  font-family: 'Arial Black', Gadget, sans-serif; 
     text-transform: capitalize
     ; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2); font-style:normal;">Typing Tips For Learner... </H4>
            <img src="./image/sad.png" alt=""
                style="height: 18rem; width: 18rem; margin-left: 28rem; margin-top:2rem; position:absolute ">
            <p class="paragraphtext">
            <span class="headingtext" style="font-size:1.3rem; margin-bottom: .1rem; display:block; font-weight: bold;">
            Why can't typists speed up Easily?</span> Many people struggle to improve their typing speed and typing test results because they don't practice
             regularly or focus on accuracy. They might not learn the right finger positions or use typing exercises 
             that can help. Without these important steps, it's hard to get better at typing quickly and smoothly. 
             But with consistent practice and the right techniques, anyone can improve their typing speed and 
             efficiency. Remember to take breaks to avoid fatigue, use typing games to make practice fun, and 
             gradually challenge yourself with more difficult texts.</p>
            <img src="./image/happy.png" alt=""
                style="height: 18rem; width: 18rem; margin-top: 35rem; margin-left:1rem; position:absolute ">
            <p class="paragraphtext1">
            <span class="headingtext" style="font-size:1.3rem; margin-top:-1rem; display:block; font-weight: bold;">
            What makes some Typists Successful?</span>That makes typists successful? Successful typists practice
                 regularly, focusing on typing both fast and accurately. They learn how to place their fingers 
                 correctly and use typing exercises, typing speed tests, and typing tests to get better. 
                 They take breaks to stay fresh, play typing games for fun, and keep challenging themselves 
                 with harder texts and typing speed tests. By incorporating various typing tests into their 
                 routine and being dedicated and patient, they steadily improve their typing speed and accuracy,
                reaching their goals step by step.
            </p>
            <button class="btt" onclick="window.location.href='blog.php'">More</button>
        </div>


        <script>

document.addEventListener("DOMContentLoaded", function() {
    const progressBar = document.getElementById('top-progress-bar');
    
    // Show progress bar on page load
    progressBar.style.opacity = '1';

    // Animate progress bar to 100% width over 2 seconds
    progressBar.style.width = '100%';
    
    // Hide progress bar after 2 seconds
    setTimeout(function() {
        progressBar.style.opacity = '0';
    }, 2000);
});


</script>

        <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        // Reset scroll position on page load
        window.onload = function() {
            window.scrollTo(0, 0);
        };
        window.onload = function() {
            const sidebar = document.querySelector(".sidebar");
            const closeBtn = document.querySelector("#btn");
            const searchBtn = document.querySelector(".bx-search");

            closeBtn.addEventListener("click", function() {
                toggleSidebar();
            });

            searchBtn.addEventListener("click", function() {
                toggleSidebar();
            });

            function toggleSidebar() {
                sidebar.classList.toggle("open");
                menuBtnChange();
            }

            function menuBtnChange() {
                if (sidebar.classList.contains("open")) {
                    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                    // Add event listener to close sidebar on body click
                    document.body.addEventListener("click", closeSidebarOnClick);
                } else {
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                    // Remove event listener when sidebar is closed
                    document.body.removeEventListener("click", closeSidebarOnClick);
                }
            }

            function closeSidebarOnClick(event) {
                // Close the sidebar if the click is outside the sidebar
                if (!sidebar.contains(event.target)) {
                    sidebar.classList.remove("open");
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                    document.body.removeEventListener("click", closeSidebarOnClick);
                }
            }
        }
        </script>
        <script>
                  const paragraphs = [
                "The call came on a Tuesday, splintering the rhythm of Amelia's ordinary afternoon. Her heart hammered a frantic tattoo against her ribs as a voice, strained and unfamiliar, rasped the news into the receiver. Her grandfather, Elias, the man who'd filled her childhood with fantastical bedtime stories and the scent of woodsmoke from his pipe, was gone. A car accident, the voice said, the words blurring at the edges. Amelia gripped the phone tighter, the plastic digging into her palm, a stark contrast to the warmth of his calloused hand that used to hold hers during their walks in the whispering pines. Grief, a cold serpent, coiled around her throat, squeezing the air from her lungs. Memories flooded in, vivid and bittersweet. The creak of the rocking chair on the porch as Elias, his face a map of wrinkles etched by time and laughter, regaled her with tales of mischievous sprites and valiant knights. The way his eyes, the color of a stormy sea, crinkled at the corners when she aced a test or brought him a handful of wildflowers. The sting of tears, hot and unexpected, blurred her vision. He wasn't supposed to leave yet. They were going to stargaze again this summer, trace constellations in the velvet expanse above their cabin, Elias weaving stories about the celestial hunters and mythical beasts etched amongst the stars. The following days were a haze of hushed goodbyes and tear-stained faces. The cabin, once a haven of warmth and laughter, now echoed with a hollow silence. The rocking chair sat empty, a stark reminder of the space his absence had carved in their lives. Amelia wandered through the rooms, her fingers trailing along the worn furniture, each touch a desperate attempt to hold onto a fragment of him. The lingering scent of pipe tobacco in his study was a cruel comfort, a phantom echo of a presence that had vanished. At night, under the vast tapestry of stars that seemed to mock her with their indifference, Amelia poured her heart out. Words, raw and choked with grief, tumbled from her lips, a desperate plea to a seemingly uncaring universe. The silence that followed was deafening, broken only by the mournful hoot of an owl perched on a distant branch. But as the first rays of dawn kissed the horizon, a newfound resolve flickered within her. Elias wouldn't have wanted her to drown in sorrow. He would have wanted her to keep looking up, to find wonder in the world, just as he had taught her. With trembling hands, Amelia picked up his worn telescope, the cool metal a grounding touch. Stepping onto the porch, she tilted her gaze skyward, a single tear tracing a path down her cheek. The familiar ache in her heart remained, a constant reminder of the love she'd lost. But amidst the grief, a spark of determination ignited. She would keep searching for constellations, for stories whispered on the wind, for the magic Elias had shown her existed everywhere, if only she knew where to look. It would be a long journey, paved with tears and laughter, but she would carry his memory with her, a guiding star in the vast expanse of her life. The call came on a Tuesday, splintering the rhythm of Amelia's ordinary afternoon. Her heart hammered a frantic tattoo against her ribs as a voice, strained and unfamiliar, rasped the news into the receiver. Her grandfather, Elias, the man who'd filled her childhood with fantastical bedtime stories and the scent of woodsmoke from his pipe, was gone. A car accident, the voice said, the words blurring at the edges. Amelia gripped the phone tighter, the plastic digging into her palm, a stark contrast to the warmth of his calloused hand that used to hold hers during their walks in the whispering pines. The following days were a haze of hushed goodbyes and tear-stained faces. The cabin, once a haven of warmth and laughter, now echoed with a hollow silence. The rocking chair sat empty, a stark reminder of the space his absence had carved in their lives. Amelia wandered through the rooms, her fingers trailing along the worn furniture, each touch a desperate attempt to hold onto a fragment of him.",
                "heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred spirits who believed in her vision with a fervor that mirrored her own. Together, they forged a fellowship bound by a shared commitment to effecting change, their collective efforts coalescing into a force for good that reverberated throughout the corridors of time. With each act of kindness and each gesture of generosity, Maya and her companions illuminated the darkness that cloaked their world, casting aside the shadows of despair and igniting the flames of hope in the hearts of those who had long languished in obscurity. It was amidst the crucible of adversity that Maya's true calling revealed itself, beckoning her toward a destiny intertwined with the welfare of others. In the crucible of her soul, Maya forged a resolve as unyielding as tempered steel, vowing to dedicate her life to the service of those in need. With the fervor of a missionary and the tenacity of a warrior, Maya embarked upon a noble crusade to uplift the downtrodden and empower the disenfranchised, her footsteps echoing through the annals of history as a testament to the enduring power of the human spirit. And so, as the sun sets on the horizon of Maya's odyssey, casting its golden rays upon a world forever altered by her presence, we are reminded of the boundless potential that resides within each and every one of us. For Maya's story is not merely a chronicle of one woman's triumph over adversity; it is a clarion call to arms—a rallying cry for all who dare to dream and strive for greatness in a world fraught with uncertainty. In the tapestry of Maya's life, we find the threads of our own destinies woven, beckoning us toward a future illuminated by the radiant light of hope and possibility. In the labyrinth of life, Maya's tale unfolds as a symphony of resilience, echoing across the expanse of time with the resonance of a thousand triumphs. Born into the crucible of poverty, Maya's childhood was a crucible where adversity forged the steel of her spirit. Yet, amidst the shadows of deprivation, Maya found solace in the embrace of her hardworking parents",
                "vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with these unprecedented advancements come complex ethical and societal implications that must be carefully navigated. As technology becomes increasingly intertwined with every aspect of our lives, questions of privacy, security, and algorithmic bias loom large. It is imperative that we approach the development and deployment of these technologies with a keen awareness of their potential risks and pitfalls, striving always to mitigate harm and promote the greater good. In the grand tapestry of human progress, the future of technology is a thread woven with the aspirations and ingenuity of countless individuals striving to push the boundaries of what is possible. As we journey forward into this brave new world, let us embrace the opportunities that lie before us with humility and foresight, mindful always of the profound impact that our actions today will have on the world of tomorrow. For in the crucible of innovation, we have the power to shape a future that is not only technologically advanced, but also equitable, inclusive, and just. At the heart of this technological renaissance lies the inexorable march of artificial intelligence (AI) and machine learning (ML), poised to transform every aspect of our lives in ways both profound and pervasive. From autonomous vehicles navigating city streets to smart assistants managing our daily routines, AI systems are becoming increasingly integrated into the fabric of society, augmenting human capabilities and revolutionizing industries with unprecedented efficiency and insight. Yet, as we marvel at the wonders of AI and ML, we must also grapple with the ethical and societal implications of their proliferation. Questions of algorithmic bias, data privacy, and the displacement of human labor loom large, challenging us to navigate the complex terrain of technological advancement with wisdom and foresight. It is incumbent upon us to ensure that these powerful tools are wielded responsibly, with a steadfast commitment to equity, transparency, and social good. Meanwhile, the convergence of",
                "ever-evolving landscape of the gaming world, the future unfolds with the promise of immersive experiences, boundless creativity, and unprecedented connectivity. As technology continues to advance at an exponential pace, the boundaries between the virtual and the real blur, giving rise to a new era of gaming that transcends traditional paradigms and embraces the limitless potential of interactive entertainment. One of the most transformative trends shaping the future of gaming is the advent of cloud gaming, which promises to democratize access to high-quality gaming experiences and break down the barriers of hardware limitations. By leveraging powerful server infrastructure to stream games directly to players' devices, cloud gaming enables seamless access to a vast library of titles without the need for expensive gaming consoles or PCs. This shift toward cloud-based gaming platforms not only expands the reach of gaming to new audiences but also fosters greater inclusivity and accessibility within the gaming community. Moreover, advancements in augmented reality (AR) and virtual reality (VR) technologies are revolutionizing the way we perceive and interact with digital worlds, opening up new frontiers of immersion and creativity. With AR, players can overlay digital content onto the physical world, blurring the lines between fantasy and reality and creating truly immersive experiences that bridge the gap between virtual and physical environments. Similarly, VR technology transports players to fully immersive digital landscapes, allowing them to ste into the shoes of their favorite characters and explore richly detailed worlds with unparalleled freedom and agency. Furthermore, the rise of esports represents a seismic shift in the gaming landscape, transforming video games into a global spectator sport with a dedicated fanbase rivaling that of traditional sports. As competitive gaming continues to gain mainstream recognition and legitimacy, esports tournaments attract millions of viewers worldwide, showcasing the skill and strategy of top players in games ranging from first-person shooters to real-time strategy titles. The growing popularity of esports not only elevates gaming to new heights of competition and entertainment but also fosters a sense of community and camaraderie among players and fans alike. In addition to these technological advancements, the future of gaming is also shaped by a growing emphasis on inclusivity, diversity, and social responsibility. Game developers are increasingly prioritizing representation and inclusivity in their titles, striving to create games that reflect the diverse experiences and perspectives of players from all walks of life. Moreover, the gaming community is leveraging its collective power to drive positive social change, raising awareness and funds for charitable causes through initiatives such as gaming marathons and charity streams. As we look ahead to the future of gaming, one thing is clear: the possibilities are endless. With each new technological breakthrough and creative innovation, the gaming world continues to push the boundaries of what is possible, offering players a universe of endless adventure, discovery, and connection. Whether exploring vast virtual landscapes, competing on the global stage of esports, or forging meaningful connections with fellow players, the future of gaming promises to be an exhilarating journey into uncharted territory—a journey where the only limit is the boundless imagination of players and creators alike. In the dynamic realm of gaming, the future unfolds as a tapestry woven with threads of innovation, interactivity, and boundless imagination. As technology marches forward at an unprecedented pace, the gaming industry stands at the forefront of this digital revolution, poised to redefine the very nature of entertainment and engagement. Moreover, the rise of virtual reality (VR) and augmented reality (AR) technologies is reshaping the gaming landscape, offering players unprecedented levels of immersion and presence within digital worlds.",
                "bustling heart of a sprawling metropolis, there resides an extraordinary individual whose journey embodies the resilience and triumph of the human spirit. Born into adversity, Maya's early years were marked by the harsh realities of poverty and struggle. Despite the formidable odds stacked against her, Maya refused to be defined by her circumstances, channeling her inner strength and determination into a relentless pursuit of success. With unwavering resolve, she embarked on a journey of self-discovery and empowerment, defying societal expectations and charting her own path to greatness. Through sheer grit and perseverance, Maya overcame countless obstacles, working multiple jobs to support herself while pursuing her education with unwavering dedication. Her resilience and tenacity eventually paid off when she earned a scholarship to a prestigious university, where she excelled academically and emerged as a shining beacon of hope for others facing similar challenges. Armed with her newfound knowledge and a burning passion to make a difference, Maya set out to create positive change in her community. She founded a nonprofit organization dedicated to providing education and resources to underprivileged youth, offering them a lifeline to a brighter future. Through her tireless efforts and unwavering commitment to service, Maya has transformed the lives of countless individuals, inspiring them to believe in themselves and reach for their dreams. Today, Maya's legacy stands as a testament to the power of resilience, determination, and the unwavering belief that no obstacle is insurmountable when fueled by the fire of hope and the courage to persevere. In the bustling heart of a sprawling metropolis lies the remarkable story of Maya, a woman whose journey from adversity to triumph serves as a beacon of inspiration for all who encounter it. Born into poverty, Maya faced the harsh realities of her circumstances with an unwavering resolve and an unshakeable determination to carve out a better future for herself and her family. Despite the myriad challenges that stood in her way, Maya refused to be defined by the limitations of her environment, instead choosing to harness her innate resilience and inner strength to propel herself forward. Through sheer grit and perseverance, she navigated the tumultuous waters of her upbringing, working tirelessly to overcome every obstacle that threatened to derail her path to success. With each setback she encountered, Maya emerged stronger and more determined than ever, fueled by a burning desire to defy the odds and achieve her dreams. Through sheer force of will, Maya earned herself a scholarship to a prestigious university, where she immersed herself in her studies with a fervor and dedication that knew no bounds. Despite the academic rigors and the demands of balancing work and school, Maya thrived in this new environment, emerging as a shining example of perseverance and academic excellence. Armed with the knowledge and skills she had acquired, Maya set her sights on a new goal: to use her education as a springboard to create positive change in her community. With unwavering resolve, Maya founded a nonprofit organization dedicated to providing educational opportunities and support to underprivileged youth in her city. Through her tireless efforts and unwavering commitment to service, Maya has touched the lives of countless individuals, offering them a lifeline to a brighter future and instilling in them the belief that anything is possible with hard work, determination, and a steadfast commitment to one's goals. Today, Maya's legacy stands as a testament to the power of the human spirit to overcome adversity and achieve greatness. Her story serves as a source of inspiration and empowerment for all who hear it, reminding us that no matter how insurmountable the obstacles may seem, with courage, determination, and unwavering faith in oneself, anything is possible. Maya's journey is a testament to the transformative power of resilience, perseverance, and the unwavering belief",
                "Amidst a quaint village, nestled among rolling hills and lush forests, lived a young boy named Elias, whose dreams soared higher than the tallest mountains that cradled his home. From a tender age, Elias harbored a passion for storytelling, weaving tales of adventure and wonder that captivated the hearts and minds of all who listened. Despite the humble origins of his upbringing, Elias possessed an insatiable curiosity and a boundless imagination that knew no bounds. With each passing day, he roamed the verdant countryside, gathering inspiration from the natural world that surrounded him and infusing his stories with the vibrant colors and rich textures of his surroundings. As the years passed, Elias's tales grew in scope and ambition, drawing upon the collective wisdom of generations past and the limitless possibilities of the future. His words became a source of solace and inspiration for his fellow villagers, offering them a brief respite from the trials and tribulations of everyday life. And so, in the quiet moments of twilight, when the world was bathed in the soft glow of the setting sun, Elias would gather his audience around him, and with a twinkle in his eye and a smile upon his lips, he would transport them to distant lands and forgotten realms, where heroes rose from the ashes of adversity and miracles flourished in the unlikeliest of places. For Elias understood that in the act of storytelling, he held the power to unlock the imagination and illuminate the human spirit, forging connections that transcended time and space and reminding us all of the boundless potential that lies within each and every one of us. In a quiet village nestled amidst rolling hills and verdant forests, young Elias stood out as a beacon of imagination and storytelling prowess. From the tender age when words first danced upon his tongue, Elias possessed a natural gift for spinning tales that transported listeners to realms beyond their wildest dreams. His stories, infused with the essence of the natural world surrounding him, held the power to captivate hearts and ignite imaginations. With each passing day, Elias wandered through fields and woods, drawing inspiration from the whispering winds and rustling leaves. As he grew, so too did his tales, evolving from simple fables to epic sagas filled with heroes, villains, and fantastical creatures. His fellow villagers eagerly gathered around him in the soft light of twilight, eager to be whisked away on journeys of adventure and discovery. Through his storytelling, Elias not only entertained his community but also sparked a flame of creativity and wonder that burned brightly within each listener. For Elias knew that in the art of storytelling lay the power to inspire, to uplift, and to transcend the boundaries of time and space. And so, with each tale he wove, Elias reminded his village of the magic that exists in the world around them, and of the limitless potential that lies within the human imagination. In a quaint village nestled amidst the picturesque scenery of rolling hills and tranquil streams, there resided a boy named Elias, whose boundless imagination ignited the hearts of all who knew him. From the tender age when he first discovered the power of words, Elias possessed a gift for storytelling that transported listeners to realms of enchantment and wonder. With each tale he spun, Elias painted vivid tapestries of adventure and heroism, drawing inspiration from the natural beauty that surrounded him. As he roamed through meadows and forests, his mind teeming with visions of dragons and knights, Elias became a beacon of creativity in his community. Villagers young and old eagerly gathered to hear his stories, their imaginations ignited by the magic of his words. Through his storytelling, Elias not only entertained his listeners but also imparted timeless lessons of courage, compassion, and resilience. For in the world of Elias's imagination, anything was possible, and the spirit of adventure burned bright in the hearts of all who dared to listen. Despite the humble origins ",
                "The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and robotics, constantly pushing the boundaries of what's possible. The future of technology holds both immense potential and challenges, and its story continues to unfold. Our story with technology stretches back millions of years, beginning with the first chipped stones used by our early ancestors. These basic tools marked the dawn of human ingenuity, laying the foundation for future advancements. Fire, another early innovation, transformed our ability to survive, keeping us warm, cooking food, and warding off predators. The wheel, invented around 3500 BC, revolutionized transportation and trade, allowing for the movement of goods and ideas on a grander scale. Fast forward to the Renaissance, where the printing press spurred a communication revolution, democratizing knowledge and fueling cultural exchange. The Industrial Revolution, powered by the steam engine, ushered in an era of mass production and transformed societies. The 20th century witnessed an unparalleled acceleration in technological development. From the birth of the airplane to the rise of computers and the internet, these advancements shrunk the world, connecting people and information at breakneck speed. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and roboti",
                "Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World War II, communist rule under the harsh dictator Nicolae Ceaușescu, and finally, the revolution of 1989 that toppled the regime. Since then, Romania has transitioned to democracy and a market economy, striving for integration with Europe. Today, Romania stands as a country shaped by its complex past, looking towards a future as part of the modern world. Before the Roman conquest, Dacia was a powerful kingdom known for its skilled warriors and impressive fortifications. While eventually succumbing to Roman might, the Dacians didn't disappear entirely. Many assimilated into Roman society, laying the groundwork for the unique Romanian language, a Romance language with strong Slavic influences. The 20th century, however, brought its share of turmoil. Romania entered World War I on the side of the Central Powers but ultimately switched allegiance, achieving a historic unification with Transylvania and other regions with significant Romanian populations. The interwar period was marked by political instability and rising nationalism. World War II brought further devastation, with Romania initially siding with the Axis before switching sides again. Despite facing challenges like the loss of Bessarabia to Russia and navigating the complex politics of the Great Powers spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World",
                "One of the major ongoing stories right now is the war in Ukraine (April 12, 2024). The conflict has entered its second phase, with intense fighting concentrated in eastern Ukraine. Russia is focusing its efforts on capturing the Donbas region, which has a large population of Russian speakers. Ukrainian forces are putting up a strong resistance, but they are facing a much larger and better-equipped military. The international community has condemned Russia's aggression and imposed severe sanctions, but these have yet to force a Russian withdrawal. The war has had a devastating impact on Ukraine, causing widespread destruction and displacing millions of people. It has also triggered a global food crisis, as Ukraine is a major exporter of wheat and other grains. Additionally, the war has sent energy prices soaring, putting a strain on economies around the world. Another major development is the ongoing negotiations on Iran's nuclear program. After a pause in talks, diplomats are trying to revive the 2015 Iran nuclear deal, which limited Iran's uranium enrichment activities in exchange for lifting sanctions. The success of these negotiations could have a significant impact on global security and energy markets. On the domestic front (depending on your location, I cannot specify without knowing where you are), there could be big stories related to upcoming elections, economic challenges like inflation, or social movements. These are just a few of the major news stories happening right now. It's important to stay informed by following reputable news sources to get a comprehensive understanding of these complex issues. The war in Ukraine continues to cast a long shadow, dominating headlines and shaping the international landscape. Having transitioned into its second phase, the conflict is now concentrated in the eastern Donbas region, a territory with strong ethnic ties to Russia. Russian forces are engaged in a brutal offensive, aiming to capture the entire region. Ukrainian troops, displaying remarkable resilience, are fiercely defending their territory despite facing a numerically and technologically superior adversary. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared One of the major ongoing stories right now is the war in Ukraine (April 12, 2024). The conflict has entered its second phase, with intense fighting concentrated in eastern Ukraine. Russia is focusing its efforts on capturing the Donbas region, which has a large population of Russian speakers. Ukrainian forces are putting up a strong resistance, but they are facing a much larger and better-equipped military. The international community has condemned Russia's aggression and imposed severe sanctions, but these have yet to force a Russian withdrawal. The war has had a devastating impact on Ukraine, causing widespread destruction and displacing millions of people. It has also triggered a global food crisis, as Ukraine is a major exporter of wheat and other grains. Additionally, the war has sent energy prices soaring, putting a strain on economies around the world. Another major development is the ongoing negotiations on Iran's nuclear program.",
                "Grand Theft Auto Online shows no signs of slowing down. Updates continue to roll out, keeping players engaged in the sprawling world of Los Santos. The latest update caters specifically to GTA+ subscribers, offering them a taste of the high life. Exclusive vehicles, like souped-up sports cars or tricked-out muscle cars, become available to cruise the streets in style. GTA+ subscribers also benefit from special discounts on in-game items and properties, allowing them to expand their criminal empires or indulge in luxurious purchases. To sweeten the pot, Rockstar throws in bonus GTA$, the in-game currency, and RP, which levels up characters and unlocks new abilities. While news regarding fresh story content for the original Grand Theft Auto V remains quiet, one thing is clear: Los Santos in GTA Online continues to be a bustling hub for online shenanigans, with Rockstar Games keeping things interesting for dedicated players, especially those subscribed to GTA+ Grand Theft Auto Online, the ever-evolving online counterpart to the blockbuster Grand Theft Auto V, continues to be a juggernaut in the gaming world. Unlike its single-player counterpart, GTA Online hasn't received any official story expansions in recent times. However, Rockstar Games, the developer behind the game, shows no signs of neglecting this online cash cow. Updates continue to roll in, injecting fresh content and activities into the sprawling world of Los Santos. The latest update targets GTA+ subscribers, Rockstar's premium membership service. These players are treated to an exclusive selection of high-performance vehicles, perfect for burning rubber across the sunny Californian landscape. GTA+ subscribers also get access to special discounts, allowing them to amass a bigger arsenal of weapons, purchase luxurious properties, or  expand their criminal empires. Rockstar further sweetens the deal with bonus GTA$, the in-game currency used to acquire everything from ammo to mansions, and RP, which levels up characters and unlocks new abilities and perks. This constant stream of updates ensures that veteran players always have something new to chase spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Grand Theft Auto Online shows no signs of slowing down. Updates continue to roll out, keeping players engaged in the sprawling world of Los Santos. The latest update caters specifically to GTA+ subscribers, offering them a taste of the high life. Exclusive vehicles, like souped-up sports cars or tricked-out muscle cars, become available to cruise the streets in style. GTA+ subscribers also benefit from special discounts on in-game items and properties, allowing them to expand their criminal empires or indulge in luxurious purchases. To sweeten the pot, Rockstar throws in bonus GTA$, the in-game currency, and RP, which levels up characters and unlocks new abilities. While news regarding fresh story content for the original Grand Theft Auto V remains quiet, one thing is clear: Los Santos in GTA Online continues to be a bustling hub for online shenanigans, with Rockstar Games keeping things interesting for dedicated players, especially those subscribed to GTA+ Grand Theft Auto",
                "Artificial intelligence (AI) is rapidly transforming our world from self-driving cars and facial recognition software to chatbots and language translation tools. AI is essentially the intelligence displayed by machines, enabling them to perform tasks typically requiring human cognitive abilities. Machine learning, a powerful subset of AI, allows systems to learn and improve from data without explicit programming. AI is revolutionizing numerous sectors like healthcare with AI-powered diagnostics and drug discovery, finance with fraud detection and algorithmic trading, and manufacturing with smarter robots and optimized production lines. However, ethical concerns around bias, transparency, and job displacement remain. As AI continues to evolve, navigating its potential and pitfalls will be crucial for shaping a future that benefits all of humanity. Artificial intelligence (AI) is no longer science fiction; it's woven into the fabric of our lives from the moment we unlock our AI-powered smartphones in the morning. AI, essentially machines mimicking human cognitive abilities, is rapidly transforming our world. Self-driving cars navigate city streets with increasing autonomy, facial recognition software unlocks our phones with a glance, and chatbots answer our customer service inquiries with surprising finesse. Machine learning, a powerful tool within AI, allows machines to learn and improve from data without needing explicit instructions, constantly refining their abilities. This technological revolution is disrupting numerous sectors. In healthcare, AI is assisting doctors with diagnoses and even accelerating drug discovery. The financial world utilizes AI for fraud detection and algorithmic trading, while manufacturing benefits from smarter robots and optimized production lines. However, the potential of AI is not without its challenges. Ethical concerns loom large, with questions about bias in algorithms, the transparency of AI decision-making, and the potential for widespread job displacement as automation takes hold. As AI continues its relentless march forward, navigating its potential and pitfalls will be critical. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Artificial intelligence (AI) is rapidly transforming our world from self-driving cars and facial recognition software to chatbots and language translation tools. AI is essentially the intelligence displayed by machines, enabling them to perform tasks typically requiring human cognitive abilities. Machine learning, a powerful subset of AI, allows systems to learn and improve from data without explicit programming. AI is revolutionizing numerous sectors like healthcare with AI-powered diagnostics and drug discovery, finance with fraud detection and algorithmic trading, and manufacturing with smarter robots and optimized production lines. However, ethical concerns around bias, transparency, and job displacement remain. As AI continues to evolve, navigating its potential and pitfalls will be crucial for shaping a future that benefits all of humanity. Artificial intelligence (AI) is no longer science fiction; it's woven into the fabric of",
                "Music, the universal language of emotion and expression, transcends boundaries of culture, language, and time. Its power lies in its ability to evoke feelings, stir memories, and communicate thoughts without the need for words. From the rhythmic beating of drums in ancient tribal ceremonies to the intricate melodies of classical symphonies, music has been an integral part of human existence for millennia, shaping cultures, influencing societies, and touching the hearts of individuals across the globe. One of the most remarkable aspects of music is its versatility. It spans a vast spectrum of genres, styles, and forms, catering to the diverse tastes and preferences of listeners. Whether it's the soulful strains of blues, the energetic beats of hip-hop, or the ethereal melodies of classical music, there is something for everyone in the world of music. Each genre carries its own unique characteristics, drawing inspiration from different cultural traditions, historical contexts, and artistic movements. Yet, despite these differences, all forms of music share a common goal: to connect with the human spirit and convey meaning beyond words. Music has the power to evoke a wide range of emotions, from joy and excitement to sadness and nostalgia. A haunting melody can transport listeners to distant memories, evoking feelings of longing and reflection. Similarly, an upbeat rhythm can energize and uplift, inspiring movement and dance. Through its emotional resonance, music provides an outlet for self-expression and catharsis, allowing individuals to process their feelings and connect with others on a deeper level. In times of celebration, music serves as a unifying force, bringing people together in shared moments of joy and festivity. Conversely, during times of sorrow, music offers solace and comfort, providing a means of healing and healing. Moreover, music plays a crucial role in shaping cultural identity and fostering social cohesion. Across cultures and civilizations, music has been used to preserve traditions, celebrate heritage, and reinforce communal bonds. Whether through folk songs, religious hymns, or national anthems, music serves as a powerful tool for transmitting values, beliefs, and narratives from one generation to the next. In this way, music becomes more than just entertainment; it becomes a symbol of identity and belonging, reflecting the collective experiences and aspirations of a society. Beyond its cultural significance, music also has profound implications for cognitive development and well-being. Research has shown that engaging with music can have a positive impact on various aspects of mental health, including stress reduction, mood enhancement, and cognitive function. Whether through active participation, such as playing an instrument or singing, or passive listening, music has the ability to stimulate the brain, evoke memories, and promote emotional regulation. In therapeutic settings, music therapy has emerged as an effective intervention for individuals with various mental health conditions, ranging from depression and anxiety to autism and dementia. By harnessing the therapeutic power of music, therapists can help clients express themselves, process emotions, and achieve a greater sense of well-being. Furthermore, music has the capacity to transcend barriers of language and communication, serving as a universal medium for expression and connection. Regardless of linguistic differences or cultural backgrounds, people from all walks of life can find common ground through music. In an increasingly globalized world, where diversity is celebrated and intercultural exchange is commonplace, music serves as a bridge that brings people together, fostering understanding, empathy, and mutual respect. Through collaborative musical endeavors, artists from different parts of the world can come together to create something beautiful and meaningful, transcending geopolitical boundaries and cultural divides. In conclusion, music is a powerful force that shapes our lives in profound and meaningful ways. From its ability",
                "Planets are celestial bodies that orbit around stars. They are categorized as part of the broader astronomical objects known as planets or extrasolar planets. These objects range in size from smaller than Earth's moon to gas giants many times larger than Jupiter. Planets vary significantly in composition, atmosphere, and surface conditions, leading to diverse environments across the cosmos. One of the most well-known planets is Earth, the third planet from the Sun in our solar system. It is the only known planet to support life, featuring a unique combination of atmosphere, temperature, and liquid water. Earth's surface is divided into continents and oceans, with diverse ecosystems that sustain a wide array of organisms. Mercury, the closest planet to the Sun, is a small, rocky world with extreme temperature variations. Its surface is heavily cratered, indicating a history of impacts from space debris. Despite its proximity to the Sun, Mercury has some regions that remain permanently shadowed, where temperatures are cold enough to sustain water ice. Venus, often called Earth's sister planet due to its similar size and composition, has a thick atmosphere primarily composed of carbon dioxide. This atmosphere creates a runaway greenhouse effect, leading to surface temperatures hot enough to melt lead. Venus's surface is marked by vast plains, highland regions, and thousands of volcanoes. Mars, the fourth planet from the Sun, is known as the Red Planet due to its reddish appearance caused by iron oxide on its surface. Mars features polar ice caps, canyons, and large volcanoes, including Olympus Mons, the largest volcano in the solar system. Evidence suggests that liquid water flowed on Mars in the past, leading scientists to speculate about the possibility of ancient life on the planet. Jupiter, the largest planet in the solar system, is a gas giant composed mostly of hydrogen and helium. It has a dynamic atmosphere marked by colorful bands and swirling storms, most notably the Great Red Spot, a giant storm system that has been observed for centuries. Jupiter has a diverse system of moons, including Io, Europa, Ganymede, and Callisto, each with its own unique features. Saturn is famous for its spectacular ring system, made up of countless icy particles ranging in size from tiny grains to large chunks. These rings orbit Saturn's equator and are visible even from Earth with a small telescope. Saturn's atmosphere is similar in composition to Jupiter's, with swirling cloud bands and massive storms. Uranus and Neptune are ice giants, composed mostly of water, ammonia, and methane ices. Uranus is unique among the planets in the solar system for its extreme axial tilt, causing it to essentially roll on its side as it orbits the Sun. Neptune, the farthest planet from the Sun, has the strongest winds in the solar system, with speeds reaching up to 1,500 miles per hour. Beyond our solar system, astronomers have discovered thousands of exoplanets orbiting other stars. These planets come in a wide variety of sizes, compositions, and orbital configurations, expanding our understanding of planetary systems and the potential for life elsewhere in the universe. In conclusion, planets are fascinating objects that come in a wide range of sizes and compositions. From the rocky worlds of Mercury and Mars to the gas giants like Jupiter and Saturn, each planet offers unique insights into the formation and evolution of our solar system and the universe beyond. Planets exhibit a diverse range of sizes, with some being relatively small like Mercury, while others are giants like Jupiter. The size of a planet is determined by its mass and composition, with larger planets typically having more mass and being composed of gases or ices. The composition of a planet's atmosphere plays a crucial role in determining its surface conditions and climate. Earth's atmosphere, for example, is predominantly nitrogen and oxygen, which allows for the presence of liquid water and supports life as we know it. In contrast, the thick atmospheres of Venus and Jupiter are primarily"
            ]

        const typing_text = document.querySelector('.text-of-typing p');
        const inputField = document.querySelector('.container .input-field');
        const errorTag = document.querySelector('.errors span');
        const timeTag = document.querySelector('.time span');
        const wpmTag = document.querySelector('.wpm span');
        const cpmTag = document.querySelector('.cpm span');
        const button = document.querySelector('button');
        const switchMode = document.getElementById('switchMode');
        const contentBox = document.querySelector('.content-box');
        const typingText = document.querySelector('.content-box .text-of-typing p');

        let characterIndex = 0;
        let wordIndex = 0; // Track the current word index
        let errors = 0;
        let timer;
        let maxTime = 120;
        let timeLeft = maxTime;
        let isTyping = false; // Change to boolean value
        let characters;
        let currentWord = ""; // Track the current word being typed
        let currentWordIndex = 0; // Track the current word index
        const paragraphChunks = []
        let currentChunkIndex = 0;
        let chunk = "";


        function fetchRandomParagraph() {
            let randomIndex = Math.floor(Math.random() * paragraphs.length);
            let paragraph = paragraphs[randomIndex];
            paragraph = paragraph.substring(0, maxCharactersDisplayed);
            let chunkSize = paragraph.length / 12;
            for (let i = 0; i < paragraph.length; i += chunkSize) {
                paragraphChunks.push(paragraph.substring(i, i + chunkSize));
            }
            document.addEventListener('keydown', () => inputField.focus());
            typing_text.addEventListener('click', () => inputField.focus());
            document.getElementById('text-container').scrollTop = 0;
        }

        function displayRandomParagraph() {
            if (currentChunkIndex < paragraphChunks.length) {
                let chunk = paragraphChunks[currentChunkIndex];
                typing_text.innerHTML = "";
                chunk.split("").forEach((char) => {
                    let spanTag = `<span>${char}</span>`;
                    typing_text.innerHTML += spanTag;
                });
                currentChunkIndex++;
            } else {
                console.log("Paragraph completed");
            }
            characters = typing_text.querySelectorAll('span');
        }

        document.addEventListener("DOMContentLoaded", function() {
            const darkModeToggle = document.getElementById("darkModeToggle");
            const body = document.body;
            // Check if the user's preference is stored
            const userPreference = localStorage.getItem("darkMode");
            // Set the initial mode based on the stored preference
            if (userPreference === "dark") {
                darkModeToggle.checked = true;
                body.classList.add("dark-mode");
            }

            darkModeToggle.addEventListener("change", function() {
                if (darkModeToggle.checked) {
                    body.classList.add("dark-mode");
                    localStorage.setItem("darkMode", "dark");
                } else {
                    body.classList.remove("dark-mode");
                    localStorage.setItem("darkMode", "light");
                }
            });
            fetchRandomParagraph();
            displayRandomParagraph()
            inputField.focus(); // Focus the input field when the page loads

        });
        const userPreference = localStorage.getItem("darkMode");
        const toggleCheckbox = document.getElementById("darkModeToggle");
        const tooltipdarkmood = document.querySelector(".tooltipdarkmood");

        toggleCheckbox.addEventListener("change", function() {
            if (toggleCheckbox.checked) {
                tooltipdarkmood.style.visibility = "hidden";
                tooltipdarkmood.style.opacity = 0;
            }
        });
        // Set the initial mode based on the stored preference
        if (userPreference === "dark") {
            document.body.classList.add("dark-mode");
        }
        const maxCharactersDisplayed = 6000; // Adjust this value as needed


        let isFirstKeyPress = true;
        inputField.addEventListener('keypress', function() {
            if (isFirstKeyPress) {
                isFirstKeyPress = false;
                switchMode.disabled = true;
            }
        });

        const tooltipexp = document.querySelector(".tooltipexp");

        switchMode.addEventListener("change", function() {
            if (switchMode.checked) {
                tooltipexp.style.visibility = "hidden";
                tooltipexp.style.opacity = 0;
            }
        });

        // Set the default mode to "noob"
        const defaultMode = 'noob';

        // Check if the user's preference is stored
        const userPreference1 = localStorage.getItem('typingTestMode');

        // Set the initial mode based on the stored preference
        if (userPreference1 === 'pro') {
            contentBox.classList.remove('noob');
            contentBox.classList.add('pro');
            switchMode.checked = false; // Set switch button to "pro" position
        } else {
            contentBox.classList.remove('pro');
            contentBox.classList.add('noob');
            switchMode.checked = true; // Set switch button to "noob" position
        }

        // Event listener for the switch button
        switchMode.addEventListener('change', function() {
            if (this.checked) {
                // Switch to noob mode
                contentBox.classList.remove('pro');
                contentBox.classList.add('noob');
                // Store user preference in localStorage
                localStorage.setItem('typingTestMode', 'noob');
            } else {
                // Switch to pro mode
                contentBox.classList.remove('noob');
                contentBox.classList.add('pro');
                // Store user preference in localStorage
                localStorage.setItem('typingTestMode', 'pro');
            }
        });



        function initTyping() {
            let typedCharacter = inputField.value.split("")[characterIndex];
            const lastIndexOfCharacters = characters.length - 1;
            const preloadThreshold = 100; // Adjust this threshold as needed
            const remainingCharacters = lastIndexOfCharacters - characterIndex;
            if (remainingCharacters <= preloadThreshold && currentChunkIndex < paragraphChunks.length - 1) {
                const nextChunk = paragraphChunks[currentChunkIndex + 1];
                const fragment = document.createDocumentFragment();
                nextChunk.split("").forEach((char) => {
                    let span = document.createElement('span');
                    span.textContent = char;
                    fragment.appendChild(span);
                });
                // Append the fragment to the typing_text container
                typing_text.appendChild(fragment);
                // Update the characters NodeList
                characters = typing_text.querySelectorAll('span');
                currentChunkIndex++;
            }
            if (characterIndex < characters.length && timeLeft > 0) {
                if (characterIndex === 0) {
                    const startMessage = document.getElementById('start-message');
                    startMessage.style.display = 'none';
                }
                if (!isTyping) {
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                if (typedCharacter == null) {
                    characterIndex--;
                    if (characters[characterIndex].classList.contains('incorrect')) {
                        errors--;
                        characters[currentWordIndex].classList.remove('incorrect-word');
                    }
                    characters[characterIndex].classList.remove('correct', 'incorrect');
                } else {
                    if (characters[characterIndex].innerText === typedCharacter) {
                        characters[characterIndex].classList.add('correct');
                    } else {
                        errors++;
                        characters[characterIndex].classList.add('incorrect');
                        characters[currentWordIndex].classList.add('incorrect-word');
                    }
                    characterIndex++;
                }
                characters.forEach((span, index) => {
                    if (index === characterIndex) {
                        span.classList.add('blinking-line');
                    } else {
                        span.classList.remove('blinking-line');
                    }
                });
                updateScroll();

                // Check if a word is complete
                if (typedCharacter === ' ' || characterIndex === characters.length - 1) {
                    currentWord = ""; // Reset the current word
                    currentWordIndex = characterIndex + 1; // Update the current word index
                } else {
                    currentWord += typedCharacter; // Build the current word
                }

                errorTag.innerText = errors;
                cpmTag.innerText = characterIndex - errors;
                let wpm = Math.round((((characterIndex - errors) / 5) / (maxTime - timeLeft)) * 60);
                wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
                wpmTag.innerText = wpm;
            } else {
                inputField.value = "";
                clearInterval(timer);

            }
        }

        inputField.addEventListener('input', initTyping);

        function updateScroll() {
            const textContainer = document.getElementById('text-container');
            const lastCharacter = characters[characterIndex - 1];
            const bottomLine = textContainer.getBoundingClientRect().bottom;
            const lastCharacterBottom = lastCharacter.getBoundingClientRect().bottom;
            if (lastCharacterBottom > bottomLine - 3.6 * characters[0].offsetHeight) {
                textContainer.scrollTop += lastCharacterBottom - bottomLine + 3.6 * characters[0].offsetHeight;
            } else if (lastCharacterBottom < textContainer.getBoundingClientRect().top) {
                textContainer.scrollTop = lastCharacter.offsetTop - textContainer.offsetTop;
            }
        }

        function showLoadingLoader() {
            // Show the loading loader
            const loadingLoader = document.querySelector('.loader');
            loadingLoader.style.display = 'block';
            document.body.classList.add('waiting-for-achievement');
            document.querySelector('.container').style.display = 'none';

            // Show the card
            const card = document.getElementById('card');
            const card2 = document.getElementById('card2');
            const card3 = document.getElementById('card3');
            const bg1 = document.getElementById('bg1');
            const ft = document.getElementById('ft');
            const para2 = document.getElementById('para2')
            card.style.display = 'none';
            card2.style.display = 'none';
            card3.style.display = 'none';
            bg1.style.display = 'none';
            ft.style.display = 'none';
            para2.style.display = 'none';



            // Hide it after 3 seconds and show the achievement box
            setTimeout(() => {
                card.style.display = 'block';
                card2.style.display = 'block';
                card3.style.display = 'block';
                bg1.style.display = 'block';
                ft.style.display = 'block';
                para2.style.display = 'block';
            

                loadingLoader.style.display = 'none';
                document.body.classList.remove('waiting-for-achievement');
                showAchievementBox();
                // Add a class to move the card down below the achievement box
                card.classList.add('move-down');
                card2.classList.add('move-down');
                card3.classList.add('move-down');
                bg1.classList.add('move-down');
                ft.classList.add('move-down');
                para2.classList.add('move-down');

            }, 3000);
        }

        function getRandomRemark(remarksArray) {
            const randomIndex = Math.floor(Math.random() * remarksArray.length);
            return remarksArray[randomIndex];
        }

        function initAchievementChart() {
            const achievementChartBox = document.querySelector('.achievement-chart-box');
            const achievementChartCanvas = document.getElementById('achievement-chart');
            const ctx = achievementChartCanvas.getContext('2d');
            const data = {
                labels: ['Accuracy', 'CPM', 'WPM'],
                datasets: [{
                    data: [0, 0, 0],
                    backgroundColor: ['rgba(196, 52, 33, 0.8)', 'rgba(78, 78, 194, 0.8)',
                        'rgba(212, 209, 32, 0.8)'
                    ],
                    barPercentage: 0.9,
                    categoryPercentage: 0.8,
                    borderRadius: 10,
                }],
            };
            const options = {

                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }],
                },
            };

            const achievementChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options,
            });

            achievementChartBox.style.display = 'block';

            return achievementChart;
        }

        function showAchievementBox() {
            // Show the achievement box
            const closeAchievementBtn = document.getElementById('close-achievement');
            closeAchievementBtn.addEventListener('click', function() {
                const achievementBox = document.querySelector('.achievement-box');
                achievementBox.style.display = 'none';
            });

            // Add event listener to the "Try Again" button inside the achievement box to restart the game
            const tryAgainAchievementBtn = document.getElementById('try-again-achievement-btn');
            tryAgainAchievementBtn.addEventListener('click', function() {
                location.reload();
            });

            // Add event listener to the "Home" button to go back to the typing page
            const homeBtn = document.getElementById('home-btn');
            homeBtn.addEventListener('click', function() {
                // Navigate back to the typing page (you can customize this based on your specific setup)
                window.location.href = "index.php";
            });

            const achievementBox = document.querySelector('.achievement-box');
            achievementBox.style.display = 'block';

            // Update achievement box content with the values
            const achievementAccuracy = document.getElementById('achievement-accuracy');
            const achievementWpm = document.getElementById('achievement-wpm');
            const achievementCpm = document.getElementById('achievement-cpm');
            const achievementRemarks = document.getElementById('achievement-remarks');

            const totalCharactersTyped = characterIndex + errors;
            const accuracy = (totalCharactersTyped === 0) ? '0%' : (((characterIndex - errors) /
                    totalCharactersTyped) *
                100).toFixed(2) + "%";
            achievementAccuracy.textContent = accuracy;
            achievementWpm.textContent = wpmTag.innerText;
            achievementCpm.textContent = cpmTag.innerText;

            // Show the achievement chart
            const achievementChart = initAchievementChart();
            achievementChart.data.datasets[0].data = [parseFloat(accuracy), parseInt(cpmTag.innerText), parseInt(
                wpmTag
                .innerText)];
            achievementChart.update();
            // Show remarks based on the achieved WPM value
            const wpmValue = parseInt(wpmTag.innerText, 10);
            let remarks = '';

            // Remarks for WPM values above 100
            if (wpmValue >= 100) {
                const remarksAbove100 = [
                    'Remarks: You have reached an absolutely outstanding typing speed!',
                    'Remarks: Your typing speed is exceptional! Keep up the great work!',
                    'Remarks: Wow! You are typing at a professional level.!',
                    // Add more remarks above 100 if needed
                ];
                remarks = getRandomRemark(remarksAbove100);
            } else if (wpmValue >= 95) {
                const remarksAbove95 = [
                    'Remarks: Excellent speed! You are impressive!',
                    'Remarks: Your typing speed is top-notch! Keep it up!',
                    'Remarks: Fantastic job! You are doing remarkably well!',
                    // Add more remarks above 95 if needed
                ];
                remarks = getRandomRemark(remarksAbove95);
            } else if (wpmValue >= 90) {
                const remarksAbove90 = [
                    'Remarks: Fantastic job! Your typing speed is outstanding!',
                    'Remarks: Great effort! You are really fast!',
                    'Remarks: You are doing exceptionally well with your typing!',
                    // Add more remarks above 90 if needed
                ];
                remarks = getRandomRemark(remarksAbove90);
            } else if (wpmValue >= 85) {
                const remarksAbove85 = [
                    'Remarks: Superb performance! Your typing speed is outstanding!',
                    'Remarks: Incredible! Your typing is in a class of its own.!',
                    'Remarks: Your typing is stellar and stands out prominently!',
                    // Add more remarks above 85 if needed
                ];
                remarks = getRandomRemark(remarksAbove85);
            } else if (wpmValue >= 80) {
                const remarksAbove80 = [
                    'Remarks: Impressive! Your typing stands out!',
                    'Remarks: You are on fire! Your typing speed is impressive!',
                    'Remarks: Exceptional! Your typing is in a class by itself!',
                    // Add more remarks above 80 if needed
                ];
                remarks = getRandomRemark(remarksAbove80);
            } else if (wpmValue >= 75) {
                const remarksAbove75 = [
                    'Remarks: You have a truly exceptional typing style!',
                    'Remarks: Your typing is superb — truly exceptional!',
                    'Remarks: The way you type is truly extraordinary!',
                    // Add more remarks above 75 if needed
                ];
                remarks = getRandomRemark(remarksAbove75);
            } else if (wpmValue >= 70) {
                const remarksAbove70 = [
                    'Remarks: Exceptional typing! You\'re setting a high standard!',
                    'Remarks: Your typing skills are top-notch!',
                    'Remarks: Exceptional typing! You\'re setting a high standard!',
                    // Add more remarks above 70 if needed
                ];
                remarks = getRandomRemark(remarksAbove70);
            } else if (wpmValue >= 65) {
                const remarksAbove65 = [
                    'Remarks: Fantastic job! Your skills are truly extraordinary!',
                    'Remarks: Outstanding! Your typing is of the highest caliber!',
                    'Remarks: Exceptional typing! You\'re doing very, very well!',
                    // Add more remarks above 65 if needed
                ];
                remarks = getRandomRemark(remarksAbove65);
            } else if (wpmValue >= 60) {
                const remarksAbove60 = [
                    'Remarks: Bravo! You\'re consistently demonstrating greatness!',
                    'Remarks: Astounding work! You\'re doing exceptionally well!',
                    'Remarks: Splendid! Your skills and dedication are outstanding!',
                    // Add more remarks above 60 if needed
                ];
                remarks = getRandomRemark(remarksAbove60);
            } else if (wpmValue >= 55) {
                const remarksAbove55 = [
                    'Remarks: Well done! Your achievements are truly remarkable!',
                    'Remarks: Impressive typing skills! Your proficiency is notable!',
                    'Remarks: Excellent! Your skills and efforts are truly praiseworthy!',
                    // Add more remarks above 55 if needed
                ];
                remarks = getRandomRemark(remarksAbove55);
            } else if (wpmValue >= 50) {
                const remarksAbove50 = [
                    'Remarks: Marvelous work! You\'re truly making a positive impact!',
                    'Remarks: Amazing job! Your excellence is truly admirable!',
                    'Remarks: Impressive performance! You\'re excelling in every way!',
                    // Add more remarks above 50 if needed
                ];
                remarks = getRandomRemark(remarksAbove50);
            } else if (wpmValue >= 45) {
                const remarksAbove45 = [
                    'Remarks: Your typing is superbly impressive — truly outclassing.',
                    'Remarks: Your typing is stellar and stands out prominently',
                    'Remarks: Your typing is incredibly exceptional and stands out.',
                    // Add more remarks above 45 if needed
                ];
                remarks = getRandomRemark(remarksAbove45);
            } else if (wpmValue >= 40) {
                const remarksAbove40 = [
                    'Remarks: Outstanding! You\'re doing exceptionally!',
                    'Remarks: Well done! You\'re making valuable progress, keep it up!',
                    'Remarks: You\'re doing wonderfully! Keep building on your success!',
                    // Add more remarks above 40 if needed
                ];
                remarks = getRandomRemark(remarksAbove40);
            } else if (wpmValue >= 35) {
                const remarksAbove35 = [
                    'Remarks: Fantastic effort! You\'re making a difference, keep it up!',
                    'Remarks: Impressive effort! Keep building on the good work!',
                    'Remarks: Bravo! You\'re moving forward, keep going!',
                    // Add more remarks above 35 if needed
                ];
                remarks = getRandomRemark(remarksAbove35);
            } else if (wpmValue >= 30) {
                const remarksAbove30 = [
                    'Remarks: Superb! You\'re doing a little more than before!',
                    'Remarks: Well done! You\'re making little strides, keep it going!',
                    'Remarks: Great progress! Keep doing a little more each day!',
                    // Add more remarks above 30 if needed
                ];
                remarks = getRandomRemark(remarksAbove30);
            } else if (wpmValue >= 25) {
                const remarksAbove25 = [
                    'Remarks: Keep practicing! You can do it better!',
                    'Remarks: You have the potential! Keep pushing yourself!',
                    'Remarks: Keep pushing your limits! Improvement comes with practice!',
                    // Add more remarks above 25 if needed
                ];
                remarks = getRandomRemark(remarksAbove25);
            } else if (wpmValue >= 20) {
                const remarksAbove20 = [
                    'Remarks: Not bad for a start! Keep improving!',
                    'Remarks: Keep practicing! You are making progress!',
                    'Remarks: Nice effort! Improvement takes time and dedication!',
                    // Add more remarks above 20 if needed
                ];
                remarks = getRandomRemark(remarksAbove20);
            } else if (wpmValue >= 15) {
                const remarksAbove15 = [
                    'Remarks: You\'re improving! Keep pushing yourself!',
                    'Remarks: You can do better! Keep pushing yourself!',
                    'Remarks: Keep going! You are capable of more!',
                    // Add more remarks above 15 if needed
                ];
                remarks = getRandomRemark(remarksAbove15);
            } else {
                const remarksBelow15 = [
                    'Remarks: Slow progress! Keep trying!',
                    'Remarks: For improvement, more practice is needed',
                    'Remarks: Improvement needed! Keep practicing!',
                    // Add more remarks below 15 if needed
                ];
                remarks = getRandomRemark(remarksBelow15);
            }

            // Display the selected remark in the achievement box
            achievementRemarks.textContent = remarks;
        }

        function initTimer() {
            timeLeft--;
            switchMode.disabled = true;

            if (timeLeft <= 0) {
                clearInterval(timer);
                characters.forEach(span => span.classList.remove('blinking'));
                inputField.disabled = true;
                inputField.classList.add('disabled');

                // Hide the entire container when time is over
                document.querySelector('.container').style.display = 'none';

                // Show the loading loader
                showLoadingLoader();
            }

            // Convert the time from seconds to minutes and seconds format
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            const formattedTime = `${minutes}:${seconds.toString().padStart(2, '0')}`;

            timeTag.innerText = formattedTime;
            updateTimerColor();
        }

        function updateTimerColor() {
            const timerElement = document.querySelector('.time span');
            const timeRemaining = (timeLeft / maxTime) * 100;

            if (timeRemaining > 50) {
                timerElement.style.color = 'white';
            } else if (timeRemaining > 10) {
                timerElement.style.color = 'green';
            } else {
                timerElement.style.color = 'red';
            }
        }

        function resetGame() {
            location.reload();
            randomParagraph();
            updateTimerColor();
            inputField.value = "";
            clearInterval(timer);
            timeLeft = maxTime;
            characterIndex = 0;
            errors = 0;
            isTyping = 0;
            timeTag.innerText = timeLeft;
            errorTag.innerText = errors;
            wpmTag.innerText = 0;
            cpmTag.innerText = 0;
            document.querySelector('.achievement-box').style.display = 'none';

        }
        const tryAgainBtn = document.getElementById('try-again-btn');

        tryAgainBtn.addEventListener('click', function() {

            location.reload();
        });
        </script>
</body>

</html>