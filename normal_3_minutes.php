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
    <title>TypingTwist.com - Three_Minute_Normal</title>
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
                        <span id="time">3:00</span>
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
                "hushed stillness of a hospital room, amidst the sterile scent of antiseptic and the soft hum of machinery, a family gathered around the bedside of their beloved matriarch, Sarah. For decades, Sarah had been the rock upon which her family relied, her warmth and wisdom guiding them through life's many trials and tribulations. But now, as she lay in her hospital bed, frail and vulnerable, her family grappled with the inevitable truth: their time together was drawing to a close. As Sarah's children and grandchildren surrounded her, their hearts heavy with grief and uncertainty, they found solace in the memories they shared. They recalled the countless moments of joy and laughter, the family gatherings filled with love and camaraderie, and the quiet moments of comfort and support that Sarah had always provided. Each memory was a testament to Sarah's boundless love and unwavering strength, a reminder of the profound impact she had on their lives. In the quiet moments that followed, as tears mingled with whispered words of love and gratitude, Sarah's family found themselves enveloped in a profound sense of peace and acceptance. For in the midst of their sorrow, they realized that Sarah's legacy would live on in the countless lives she had touched, in the lessons she had imparted, and in the love that would continue to bind them together, even in her absence. And so, as Sarah took her final breaths, surrounded by the warmth and love of her family, her spirit soared free, leaving behind a legacy of love and compassion that would endure for generations to come. And though their hearts were heavy with grief, Sarah's family found comfort in the knowledge that she would live on in their memories, their hearts, and their souls, forever and always. heart-wrenching depths of loss and longing, there exists a story of a family grappling with the impending departure of their beloved patriarch, Thomas. As Thomas lay in his hospital bed, his family gathered around him, their hearts heavy with the weight of impending loss. Each moment spent together felt like a fragile treasure, slipping through their fingers like grains of sand in an hourglass. In the midst of their sorrow, memories flooded their minds  memories of Thomas's unwavering love, his infectious laughter, and the strength of his embrace during times of hardship. They recalled the countless lessons he had imparted, the wisdom he had shared, and the countless sacrifices he had made for their well-being. Each memory served as a bittersweet reminder of the indelible mark Thomas had left on their lives. As they held vigil by his bedside, the family found solace in each other's presence, drawing strength from their shared bonds of love and support. In the quiet moments between whispered conversations and tearful embraces, they found moments of grace and peace amidst the storm of grief. And then, as Thomas took his final breath, surrounded by the love of his family, a profound sense of calm descended upon the room. In that moment, they knew that though Thomas may no longer be with them in body, his spirit would live on in the memories they shared, the values he had instilled, and the love that bound them together. As they mourned their loss, the family found solace in the knowledge that Thomas's legacy would endure – a testament to the enduring power of love, the resilience of the human spirit, and the profound impact one life can have on those it touches. And though their hearts ached with grief, they found comfort in the belief that Thomas would live on in their hearts, their minds, and their souls, forever and always. In the tender embrace of a hospital room, suffused with the faint scent of antiseptic and the gentle hum of machinery, a family gathered around the bedside of their patriarch, Thomas, whose journey through life was reaching its poignant conclusion. Thomas, once a stalwart figure of strength and resilience, now lay shrouded in fragility, his once-vibrant spirit dimmed by the relentless march of time and illness. Yet, even as his body weakened, his presence radiated a quiet dignity and grace that touched the hearts of all who stood vigil by his side. As Thomas's loved ones encircled him, their eyes heavy with sorrow and their hearts weighed down by the impending loss, they found themselves enveloped in a bittersweet tapestry of memories – memories of shared laughter and joy, of whispered secrets and heartfelt conversations, of the countless moments that had woven the fabric of their lives together. Each memory served as a poignant reminder of the depth of their bond with Thomas, of the profound impact he had made on their lives, and of the love that had sustained them through the trials and triumphs of their journey together. In the sacred silence of that hospital room, time seemed to stand still as the family found themselves suspended in a fragile moment of liminality, teetering on the precipice between the known and the unknown, between the past and the future. And yet, amidst the swirling currents of grief and uncertainty, they found solace in the enduring strength of their connection – a connection forged in the crucible of love, tempered by the fires of adversity, and bound together by the unbreakable ties of family. As they held vigil by Thomas's bedside, the family drew comfort from the warmth of each other's presence, finding solace in the shared rituals of love and remembrance that had become their lifeline in the face of loss. They spoke words of gratitude and forgiveness, of hope and acceptance Emily and James faced the future with a newfound sense of hope and determination, knowing that as long as they had each other, they would never truly be alone. As they walked hand in hand into the sunrise, their hearts filled with the promise of new beginnings and the certainty that together, they could overcome any obstacle that stood in their way. For theirs was a love that had weathered storms and endured trials, and in its enduring embrace, they found the strength to face whatever",
                "In the shadowed embrace of a moonlit night, amidst the echoes of whispered promises and shattered dreams, there exists a story of love lost and hearts broken. Once, there was a couple, Emily and James, whose love burned bright like a flame in the darkness, illuminating their world with its warmth and radiance. Their love was a symphony of laughter and joy, of shared hopes and dreams, of whispered confidences and stolen moments of tenderness. But as fate would have it, their love was not destined to endure. Slowly, imperceptibly at first, cracks began to appear in the foundation of their relationship – tiny fissures that widened with each passing day until they became chasms too vast to bridge. Misunderstandings turned into arguments, and arguments turned into silence, until the once-vibrant melody of their love faded into a mournful dirge of regret and longing. In the quiet moments of solitude that followed, Emily and James found themselves adrift in a sea of memories, each wave crashing against the shores of their hearts with a force that threatened to consume them. They searched for answers in the depths of their pain, grappling with the cruel irony of a love that had once seemed so invincible now lying in ruins at their feet. As they wandered through the wreckage of their shattered dreams, Emily and James confronted the harsh reality of their broken relationship with a courage born of desperation. They sifted through the debris of their shared past, retracing the steps that had led them to this moment of reckoning, hoping against hope to find a glimmer of understanding amidst the wreckage. But try as they might, the answers remained elusive, slipping through their fingers like grains of sand in an hourglass, leaving behind only the bitter taste of regret and the haunting echoes of what might have been. And so, with heavy hearts and tear-stained eyes, Emily and James parted ways, their love reduced to a fragile memory, a ghostly echo of the passion that had once burned so brightly between them. In the aftermath of their separation, Emily and James found themselves adrift in a vast ocean of loneliness, each struggling to make sense of a world that suddenly seemed so cold and indifferent. They searched for solace in the arms of others, seeking refuge from the pain of their broken hearts in fleeting moments of distraction and temporary respite. But no matter how hard they tried to outrun their pain, the memories of their lost love haunted them like shadows in the night, a constant reminder of the emptiness that now lay within their souls. And so, they wandered through life like ghosts, their hearts forever scarred by the bittersweet ache of a love that had slipped through their fingers like sand. In the end, Emily and James were left with nothing but the shattered fragments of their broken dreams, their hearts forever changed by the cruel hand of fate. And though they would each find their own path forward in time, the memory of their lost love would remain etched upon their souls, a poignant reminder of the fragility of the human heart and the pain of love's bittersweet embrace. In the end, Emily and James were left with nothing but the shattered fragments of their broken dreams, their hearts forever changed by the cruel hand of fate. And though they would each find their own path forward in time, the memory of their lost love would remain etched upon their souls, a poignant reminder of the fragility of the human heart and the pain of love's bittersweet embrace. Yet, in the depths of their despair, there flickered a faint glimmer of hope – a whisper of possibility that lingered on the edges of their consciousness, like a distant beacon calling out across the vast expanse of their sorrow. For even in the darkest moments of their anguish, they knew that love, true love, was not something that could be extinguished so easily. It was a flame that burned eternal, casting its warm glow upon the darkest corners of their souls and illuminating the path forward with its gentle light. And so, as they stood on the threshold of a new day, Emily and James made a silent vow to themselves – a promise to embrace the pain of their past and to channel it into a beacon of hope for the future. For they knew that even in the midst of their heartbreak, there lay the seeds of a new beginning, a chance to rebuild their lives from the ashes of their shattered dreams and to forge a path forward guided by the enduring power of love. As they turned their faces toward the horizon, the first rays of dawn breaking through the darkness, Emily and James felt a renewed sense of purpose stirring within their souls. Though their journey would be fraught with challenges and obstacles, they knew that they were not alone – for in the depths of their hearts, they carried the memory of their lost love, a source of strength and resilience that would carry them through even the darkest of nights. And so, hand in hand, they stepped forward into the unknown, their hearts heavy with sorrow but buoyed by the hope of a brighter tomorrow. For they knew that even in the face of life's greatest challenges, love would always find a way to prevail – a beacon of light in the darkness, guiding them home to each other's arms once more. In the gentle embrace of the dawn, Emily and James found the courage to take the first tentative steps toward healing, their hearts intertwined in a silent vow to never lose hope, no matter how daunting the journey ahead may seem. For they understood that love was not merely a fleeting emotion, but a force of nature, capable of transcending even the deepest wounds and the darkest nights. And as they embarked on this new chapter of their lives, they carried with them the unwavering belief that in the end , love would always triumph over despair, and that their story, though marked by heartache and loss, would ultimately be a testament to the enduring power of the human spirit to rise above adversity and find solace in the embrace of love. In the gentle embrace",
                "Globalization, the process of increased interconnectedness and interdependence among countries, has profoundly shaped the economic and cultural landscapes of societies worldwide. While globalization has brought about numerous opportunities for growth and development, it has also sparked debates about its impact on local economies and cultures. This essay explores the multifaceted effects of globalization on local economies and cultures, highlighting both the benefits and challenges that arise from this phenomenon. One of the most significant impacts of globalization on local economies is the integration of markets across borders. This integration has led to increased trade and investment flows, facilitating economic growth and development in many regions  Local businesses now have access to larger markets, allowing them to expand their operations and reach a global customer base. Additionally, globalization has spurred technological advancements, particularly in communication and transportation, making it easier for businesses to connect with suppliers, partners, and customers around the world. However, globalization has also led to concerns about economic inequality and job displacement. As multinational corporations expand their operations globally, they may exploit cheap labor in developing countries, leading to the displacement of local businesses and workers. Moreover, the liberalization of trade and investment policies can lead to the erosion of local industries, as they struggle to compete with foreign competitors. This can result in job losses and stagnant wages, particularly for low-skilled workers in traditional sectors. Globalization has profoundly influenced cultural exchange and diversity, as it has facilitated the spread of ideas, values, and cultural practices across borders. Through the proliferation of media, such as television, film, and the internet, people around the world are exposed to different cultures, languages, and lifestyles. This has led to greater cultural awareness and understanding, fostering a sense of global citizenship and interconnectedness. However, globalization has also sparked concerns about cultural homogenization and the loss of local traditions and identities. As Western cultural products dominate global markets, there is a risk of cultural imperialism, where indigenous cultures are overshadowed by dominant Western influences. Moreover, the spread of consumerism and materialism associated with globalization can erode traditional values and customs, leading to the homogenization of global culture. globalization has had a profound impact on local economies and cultures, reshaping the way societies interact and function. While globalization has brought about economic opportunities and cultural exchange, it has also raised concerns about inequality, job displacement, and cultural homogenization. Moving forward, it is essential to address these challenges and harness the benefits of globalization in a way that promotes sustainable development and preserves local identities and traditions. By fostering inclusive growth and promoting cultural diversity, we can ensure that globalization benefits all members of society, while respecting the unique contributions of local economies and cultures. Globalization has transformed the world in profound ways, impacting local economies and cultures in complex and nuanced ways. Economically, globalization has facilitated the integration of markets across borders, leading to increased trade, investment, and technological advancements. This has opened up new opportunities for businesses to expand their operations globally and access larger markets. However, it has also led to concerns about economic inequality and job displacement, particularly in developing countries where cheap labor may be exploited by multinational corporations. Culturally, globalization has facilitated the exchange of ideas, values, and cultural practices, fostering greater cultural awareness and understanding among people worldwide. The proliferation of media platforms has enabled individuals to access diverse cultural content from around the globe, contributing to a sense of global citizenship. However, there are also concerns about cultural homogenization and the erosion of local traditions and identities. Western cultural products often dominate global markets, potentially overshadowing indigenous cultures and leading to a loss of cultural diversity. Furthermore, the spread of consumerism and materialism associated with globalization can undermine traditional values and customs, leading to a homogenization of global culture. In some cases, this can result in a backlash against globalization, as communities seek to preserve their unique identities in the face of external influences. It is essential to strike a balance between the benefits and challenges of globalization, ensuring that economic growth is inclusive and sustainable, and that cultural diversity is respected and preserved. Local economies and cultures are not passive recipients of globalization but active participants in shaping its outcomes. Governments, businesses, and civil society organizations play a crucial role in shaping policies and practices that promote inclusive development and cultural diversity. Initiatives such as supporting small and medium-sized enterprises, investing in education and skills development, and promoting cultural exchange and dialogue can help mitigate the negative effects of globalization while maximizing its benefits for local economies and cultures. Ultimately, the impact of globalization on local economies and cultures is a complex and dynamic process that requires careful consideration of its economic, social, and cultural dimensions. By fostering a more inclusive and sustainable form of globalization, we can ensure that the benefits of interconnectedness are shared more equitably, and that local identities and traditions are respected and preserved in an increasingly globalized world. Climate change ",
                "The English language has emerged as the preeminent lingua franca of the modern world, playing a pivotal role in global communication, commerce, diplomacy, and culture. This essay explores the evolution of English as a lingua franca, its impact on societies worldwide, and prospects for its future dominance. English's journey from a regional dialect to a global lingua franca is a fascinating tale of historical, political, and cultural factors. Its roots lie in the Germanic languages brought to Britain by Anglo-Saxon settlers in the 5th century. Over time, English evolved through influences from Latin, French, Norse, and other languages, culminating in the Middle English period. The expansion of the British Empire in the 17th to 19th centuries played a crucial role in spreading English worldwide. Colonization, trade, and missionary activities facilitated the language's diffusion to North America, the Caribbean, Africa, Asia, and the Pacific. The Industrial Revolution and the rise of the United States further propelled English's global ascendancy. The dominance of English as a lingua franca has profound implications for global communication and interaction. It serves as a common language for international business, science, technology, academia, and tourism, facilitating cross-cultural exchange and collaboration. English proficiency has become a valuable skill for individuals seeking economic opportunities and social mobility in the globalized world. Moreover, English has enriched and transformed languages and cultures worldwide through lexical borrowing, linguistic hybridization, and cultural exchange. From loanwords and idioms to literary and cinematic influences, English has left an indelible mark on the cultural landscapes of diverse societies. Despite its widespread adoption, English's status as a lingua franca is not without challenges and criticisms. Linguistic imperialism, linguistic inequality, and cultural homogenization are among the concerns raised by critics. The privileging of English in education, media, and international institutions can marginalize indigenous languages and perpetuate inequalities in access to knowledge and opportunities. Furthermore, the proliferation of English as a lingua franca raises questions about linguistic diversity and the preservation of endangered languages. Efforts to promote multilingualism and protect linguistic heritage are essential for maintaining cultural diversity and fostering inclusive communication in the global arena. Looking ahead, English's dominance as a lingua franca is likely to persist in the foreseeable future, driven by globalization, digital technology, and economic interdependence. However, the dynamics of global language use are constantly evolving, with emerging powers such as China and India exerting increasing influence on the world stage. The future of English as a lingua franca will be shaped by complex factors, including geopolitical shifts, technological advancements, and societal trends. While English will remain a vital tool for international communication, the coexistence of multiple global languages and the recognition of linguistic diversity are essential for fostering mutual understanding and cooperation in a multicultural world. conclusion, the English language has emerged as a dominant lingua franca in the modern world, facilitating global communication, commerce, and cultural exchange. Its historical evolution, impact on societies, and future prospects highlight both the opportunities and challenges of linguistic globalization. As English continues to evolve and adapt in response to changing global dynamics, embracing linguistic diversity and promoting inclusive communication are essential for building a more interconnected and harmonious global community. The pervasive influence of English extends beyond formal domains like business and academia into everyday life, shaping popular culture, entertainment, and social media. English-language music, films, television shows, and literature have a global audience, contributing to the spread of English and the assimilation of its cultural norms and values. Moreover, English proficiency is often a prerequisite for social and economic mobility, particularly in countries where English is not the native language. Access to English-language education and resources can determine individuals' opportunities for employment, higher education, and participation in the global marketplace. The role of English in education is a subject of considerable debate, particularly in multilingual societies where it competes with indigenous languages for dominance. While English-medium instruction may offer advantages in terms of access to international knowledge and opportunities, it can also pose challenges for students who are not proficient in the language. Efforts to promote English as a second language (ESL) or a foreign language (EFL) in educational systems worldwide reflect the perceived importance of English proficiency in the globalized economy. However, concerns about linguistic imperialism and the erosion of linguistic diversity underscore the need for balanced language policies that support multilingualism and respect cultural heritage. The digital revolution has accelerated the spread of English as a global lingua franca, with the internet, social media, and digital communication platforms serving as vehicles for English-language content and interaction. English dominates cyberspace, with a vast majority of websites, online resources, and digital tools available in English. The rise of artificial intelligence (AI) and machine learning further reinforces English's status as a dominant language in technology. English-language data sets and algorithms underpin many AI applications, from natural language processing to virtual assistants, contributing to the consolidation of English as the language of the digital age. Despite its undeniable influence, English as a lingua franca faces criticism and resistance from various quarters.",
                "In the kingdom of Britain, King Lear, an aging monarch, decides to divide his realm among his three daughters: Goneril, Regan, and Cordelia. He plans to give the largest share to the daughter who loves him the most. Goneril and Regan, eager for power, flatter their father with extravagant declarations of love. Cordelia, however, refuses to engage in such empty flattery, stating that she loves him according to her bond, no more, no less. Enraged by her honesty, Lear banishes Cordelia and divides her share between Goneril and Regan. Meanwhile, the Earl of Gloucester's illegitimate son, Edmund, plots to discredit his legitimate brother Edgar and inherit his father's lands. He forges a letter to make it appear as though Edgar is conspiring against their father. Lear soon discovers that Goneril and Regan are not as loving as they professed. They mistreat him, depriving him of his knights and servants. Disillusioned and betrayed, Lear wanders out into a storm with his Fool and a few loyal followers. In a parallel plot, Gloucester is deceived by Edmund into believing that Edgar seeks his death. Edgar is forced to flee and disguises himself as a beggar. Lear, wandering on the heath in the midst of a fierce storm, begins to lose his sanity. In his madness, he rages against the elements and his daughters, gaining insight into his own folly and the nature of power. Meanwhile, Goneril and Regan turn against each other, each vying for power and the affection of Edmund. Regan's husband, the Duke of Cornwall, is killed in a scuffle with a servant loyal to Gloucester, who is then blinded for his disloyalty. Edgar, disguised as a madman, encounters his blinded father Gloucester on the heath. He leads Gloucester to Dover, where they hope to find refuge. Eventually, Cordelia returns with an army from France to rescue her father. Lear, now reconciled with Cordelia, leads her forces into battle against Goneril, Regan, and Edmund. However, their forces are defeated, and both Lear and Cordelia are captured. In a tragic climax, Lear and Cordelia are imprisoned. Edmund, now regretting his actions, attempts to undo the damage he has caused but is mortally wounded in a duel with Edgar. Goneril, Regan, and Edmund all meet their demise, but Lear arrives too late to save Cordelia, who dies in his arms. The play ends with Lear's heartbreak over the death of Cordelia, as he himself dies from grief. The kingdom is left in ruins, with the audience left to contemplate the consequences of unchecked ambition and the frailty of human nature. King Lear delves deep into themes of power, betrayal, family, madness, and the nature of humanity. Here's a closer look at some of these themes:Power and Betrayal: The play explores how the thirst for power can lead to betrayal and treachery. Lear's decision to divide his kingdom sets off a chain of events fueled by his daughters' desire for power and Edmund's machinations to advance his own status. Goneril, Regan, and Edmund all betray their own family members in pursuit of power, leading to tragic consequences. Family and Filial Loyalty: King Lear examines the complexities of family relationships and the obligations between parents and children. Lear's demand for flattery and his subsequent rejection of Cordelia highlight the importance of honesty and genuine love within families. Cordelia's steadfast loyalty to her father, despite his mistreatment of her, stands in stark contrast to the deceitful actions of her sisters. Madness and Sanity: The play portrays the thin line between sanity and madness, particularly through Lear's descent into madness as he grapples with betrayal and loss. His wandering on the heath, accompanied by the Fool, serves as a metaphor for his internal turmoil and the chaos that envelops the kingdom. Gloucester's literal blindness also symbolizes the characters' inability to see the truth amidst the deceit and betrayal surrounding them. Justice and Redemption: King Lear raises questions about justice and whether it can ever be achieved in a world marked by greed, ambition, and moral ambiguity. Characters like Lear, Gloucester, and Edgar undergo journeys of self-discovery and redemption, confronting their own flaws and seeking forgiveness for their past mistakes. However, the play ultimately suggests that true justice may remain elusive, as the consequences of the characters' actions reverberate throughout the tragic ending. Nature and Order: Throughout the play, the imagery of nature reflects the disorder and chaos within the kingdom. The storm on the heath mirrors Lear's inner turmoil and the upheaval within the political landscape. The breakdown of social order, represented by Lear's abdication and the subsequent power struggles among his daughters, underscores the fragile balance between civilization and the natural world. Overall, King Lear serves as a profound exploration of human nature and the consequences of unchecked ambition, betrayal, and the search for power. It remains one of Shakespeare's most enduring tragedies, resonating with audiences through its timeless themes and complex characters. In the kingdom of Britain, King Lear, an aging monarch, decides to divide his realm among his three daughters: Goneril, Regan, and Cordelia. He plans to give the largest share to the daughter who loves him the most. Goneril and Regan, eager for power, flatter their father with extravagant declarations of love. Cordelia, however, refuses to engage in such empty flattery, stating that she loves him according to her bond, no more, no less. Enraged by her honesty, Lear banishes Cordelia and divides her share between Goneril and Regan children. Lear's demand for flattery and his subsequent rejection of Cordelia highlight the importance of honesty and genuine love within families. Cordelia's steadfast loyalty to her father, despite his mistreatment of her, stands in stark contrast to the deceitful actions of her sisters. Madness and Sanity: The play portrays the thin line between sanity It remains one of Shakespeare's most",
                "Nature, with its ineffable allure and timeless charm, has been a wellspring of inspiration for poets, artists, and philosophers across the ages. From the majestic peaks of towering mountains to the tranquil serenity of meandering streams, the beauty of nature captivates our senses and nourishes our souls. In this essay, we delve into the myriad facets of nature's beauty, exploring its profound impact on human consciousness and the imperative of preserving its splendor for future generations to behold. At the heart of nature's allure lies its inherent diversity, manifested in the kaleidoscope of landscapes, flora, and fauna that adorn our planet. Each sunrise paints the sky with a symphony of colors, as the sun casts its golden rays upon the earth, illuminating valleys and forests with an ethereal glow. From the delicate petals of a blooming flower to the rugged grandeur of ancient forests, nature's tapestry is woven with infinite intricacy and boundless creativity. Moreover, the beauty of nature transcends the merely aesthetic, serving as a potent catalyst for contemplation and introspection. In the tranquil solitude of a forest glade or the gentle lapping of waves against the shore, we find solace from the frenetic pace of modern life, reconnecting with the rhythm of the natural world. Nature's symphony, composed of birdsong, rustling leaves, and rushing water, offers a respite from the cacophony of human endeavor, inviting us to listen, observe, and reflect. Furthermore, nature's beauty has the power to evoke a sense of wonder and awe, igniting a spark of curiosity and exploration within the human spirit. From the towering redwoods of California to the pristine wilderness of the Arctic, the sheer magnitude and majesty of the natural world inspire us to venture forth and discover its hidden treasures. In the process, we come to appreciate our own place within the intricate web of life, humbled by the vastness and complexity of the cosmos. In addition to its aesthetic and contemplative dimensions, the beauty of nature plays a crucial role in sustaining life on earth, providing essential resources and ecosystem services that support human well-being. Forests act as carbon sinks, mitigating the impacts of climate change, while wetlands filter water and regulate floods. Biodiverse ecosystems harbor countless species, each playing a unique role in maintaining the delicate balance of nature. However, despite its intrinsic value and importance, nature's beauty is increasingly under threat from human activities, including deforestation, pollution, and climate change. The loss of biodiversity, degradation of ecosystems, and destruction of natural habitats represent a grave existential crisis, imperiling not only the beauty of nature but also the future of life on earth. As stewards of the planet, it is incumbent upon us to safeguard nature's splendor for generations to come, through concerted conservation efforts, sustainable development practices, and a renewed reverence for the natural world. In conclusion, the beauty of nature is a source of endless inspiration and wonder, enriching our lives in profound and meaningful ways. From its aesthetic grandeur to its spiritual resonance, nature's allure transcends the bounds of time and space, reminding us of our deep connection to the web of life. As we stand at the precipice of a new era, let us pledge to protect and preserve the beauty of nature, not only for ourselves but for all the generations yet to come. Certainly, let's delve deeper into the beauty of nature. One of nature's most captivating qualities is its ability to evoke a sense of tranquility and inner peace within us. Whether it's the gentle rustle of leaves in a forest, the rhythmic crashing of waves on a sandy shore, or the soft hum of insects in a meadow, nature has a way of soothing our minds and refreshing our spirits. In the midst of a chaotic world, spending time in nature offers a sanctuary where we can escape the stresses of daily life and find renewal. Moreover, nature's beauty has a profound impact on our physical and mental well-being. Numerous studies have shown that exposure to natural environments can reduce stress, lower blood pressure, and improve overall mood. The sights, sounds, and smells of nature engage our senses in a way that calms the nervous system and promotes relaxation. Whether it's a leisurely stroll through a park, a hike in the mountains, or simply sitting beneath a tree, immersing ourselves in nature's beauty has therapeutic effects that are both immediate and long-lasting. Furthermore, the beauty of nature fosters a sense of interconnectedness and interdependence among all living beings. In the intricate dance of ecosystems, every plant, animal, and microorganism plays a vital role in sustaining life on earth. From the pollination of flowers by bees to the decomposition of organic matter by fungi, nature's myriad processes form a delicate web of relationships that bind us all together. Recognizing our place within this web reminds us of the importance of humility, cooperation, and respect for all living things. Additionally, nature's beauty has inspired countless works of art, literature, and music throughout human history. From the romantic landscapes of the Hudson River School painters to the transcendental poetry of Wordsworth and Thoreau, artists have sought to capture the essence of nature's majesty and mystery. Through their creations, they invite us to see the world with fresh eyes, to marvel at its wonders, and to contemplate our place within it. In doing so, they awaken within us a sense of wonder and reverence for the beauty that surrounds us. In conclusion, the beauty of nature is a source of boundless inspiration, healing, and wonder. Its profound impact on our lives reminds us of the importance of preserving and protecting the natural world for future generations. As we continue to navigate the complexities of the modern world, let us not forget the timeless beauty that awaits us in the forests.",
                "The call came on a Tuesday, splintering the rhythm of Amelia's ordinary afternoon. Her heart hammered a frantic tattoo against her ribs as a voice, strained and unfamiliar, rasped the news into the receiver. Her grandfather, Elias, the man who'd filled her childhood with fantastical bedtime stories and the scent of woodsmoke from his pipe, was gone. A car accident, the voice said, the words blurring at the edges. Amelia gripped the phone tighter, the plastic digging into her palm, a stark contrast to the warmth of his calloused hand that used to hold hers during their walks in the whispering pines. Grief, a cold serpent, coiled around her throat, squeezing the air from her lungs. Memories flooded in, vivid and bittersweet. The creak of the rocking chair on the porch as Elias, his face a map of wrinkles etched by time and laughter, regaled her with tales of mischievous sprites and valiant knights. The way his eyes, the color of a stormy sea, crinkled at the corners when she aced a test or brought him a handful of wildflowers. The sting of tears, hot and unexpected, blurred her vision. He wasn't supposed to leave yet. They were going to stargaze again this summer, trace constellations in the velvet expanse above their cabin, Elias weaving stories about the celestial hunters and mythical beasts etched amongst the stars. The following days were a haze of hushed goodbyes and tear-stained faces. The cabin, once a haven of warmth and laughter, now echoed with a hollow silence. The rocking chair sat empty, a stark reminder of the space his absence had carved in their lives. Amelia wandered through the rooms, her fingers trailing along the worn furniture, each touch a desperate attempt to hold onto a fragment of him. The lingering scent of pipe tobacco in his study was a cruel comfort, a phantom echo of a presence that had vanished. At night, under the vast tapestry of stars that seemed to mock her with their indifference, Amelia poured her heart out. Words, raw and choked with grief, tumbled from her lips, a desperate plea to a seemingly uncaring universe. The silence that followed was deafening, broken only by the mournful hoot of an owl perched on a distant branch. But as the first rays of dawn kissed the horizon, a newfound resolve flickered within her. Elias wouldn't have wanted her to drown in sorrow. He would have wanted her to keep looking up, to find wonder in the world, just as he had taught her. With trembling hands, Amelia picked up his worn telescope, the cool metal a grounding touch. Stepping onto the porch, she tilted her gaze skyward, a single tear tracing a path down her cheek. The familiar ache in her heart remained, a constant reminder of the love she'd lost. But amidst the grief, a spark of determination ignited. She would keep searching for constellations, for stories whispered on the wind, for the magic Elias had shown her existed everywhere, if only she knew where to look. It would be a long journey, paved with tears and laughter, but she would carry his memory with her, a guiding star in the vast expanse of her life. The call came on a Tuesday, splintering the rhythm of Amelia's ordinary afternoon. Her heart hammered a frantic tattoo against her ribs as a voice, strained and unfamiliar, rasped the news into the receiver. Her grandfather, Elias, the man who'd filled her childhood with fantastical bedtime stories and the scent of woodsmoke from his pipe, was gone. A car accident, the voice said, the words blurring at the edges. Amelia gripped the phone tighter, the plastic digging into her palm, a stark contrast to the warmth of his calloused hand that used to hold hers during their walks in the whispering pines. The following days were a haze of hushed goodbyes and tear-stained faces. The cabin, once a haven of warmth and laughter, now echoed with a hollow silence. The rocking chair sat empty, a stark reminder of the space his absence had carved in their lives. Amelia wandered through the rooms, her fingers trailing along the worn furniture, each touch a desperate attempt to hold onto a fragment of him. The call came on a Tuesday, splintering the rhythm of Amelia's ordinary afternoon. Her heart hammered a frantic tattoo against her ribs as a voice, strained and unfamiliar, rasped the news into the receiver. Her grandfather, Elias, the man who'd filled her childhood with fantastical bedtime stories and the scent of woodsmoke from his pipe, was gone. A car accident, the voice said, the words blurring at the edges. Amelia gripped the phone tighter, the plastic digging into her palm, a stark contrast to the warmth of his calloused hand that used to hold hers during their walks in the whispering pines. Grief, a cold serpent, coiled around her throat, squeezing the air from her lungs. Memories flooded in, vivid and bittersweet. The creak of the rocking chair on the porch as Elias, his face a map of wrinkles etched by time and laughter, regaled her with tales of mischievous sprites and valiant knights. The way his eyes, the color of a stormy sea, crinkled at the corners when she aced a test or brought him a handful of wildflowers. The sting of tears, hot and unexpected, blurred her vision. He wasn't supposed to leave yet. They were going to stargaze again this summer, trace constellations in the velvet expanse above their cabin, Elias weaving stories about the celestial hunters and mythical beasts etched amongst the stars. The following days were a haze of hushed goodbyes and tear-stained faces. The cabin, once a haven of warmth and laughter, now echoed with a hollow silence. The rocking chair sat empty, a stark reminder of the space his absence had carved in their lives. Amelia wandered through the rooms, her fingers trailing along the worn furniture, each touch a desperate attempt to hold onto a fragment of him. The lingering scent of pipe tobacco in his study was a cruel comfort, a phantom echo of a presence that had vanished. At night, under the vast tapestry of stars that seemed to mock her with their indifference, Amelia poured her heart out. Words, raw and choked with grief, tumbled",
                "heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred spirits who believed in her vision with a fervor that mirrored her own. Together, they forged a fellowship bound by a shared commitment to effecting change, their collective efforts coalescing into a force for good that reverberated throughout the corridors of time. With each act of kindness and each gesture of generosity, Maya and her companions illuminated the darkness that cloaked their world, casting aside the shadows of despair and igniting the flames of hope in the hearts of those who had long languished in obscurity. It was amidst the crucible of adversity that Maya's true calling revealed itself, beckoning her toward a destiny intertwined with the welfare of others. In the crucible of her soul, Maya forged a resolve as unyielding as tempered steel, vowing to dedicate her life to the service of those in need. With the fervor of a missionary and the tenacity of a warrior, Maya embarked upon a noble crusade to uplift the downtrodden and empower the disenfranchised, her footsteps echoing through the annals of history as a testament to the enduring power of the human spirit. And so, as the sun sets on the horizon of Maya's odyssey, casting its golden rays upon a world forever altered by her presence, we are reminded of the boundless potential that resides within each and every one of us. For Maya's story is not merely a chronicle of one woman's triumph over adversity; it is a clarion call to arms—a rallying cry for all who dare to dream and strive for greatness in a world fraught with uncertainty. In the tapestry of Maya's life, we find the threads of our own destinies woven, beckoning us toward a future illuminated by the radiant light of hope and possibility. In the labyrinth of life, Maya's tale unfolds as a symphony of resilience, echoing across the expanse of time with the resonance of a thousand triumphs. Born into the crucible of poverty, Maya's childhood was a crucible where adversity forged the steel of her spirit. Yet, amidst the shadows of deprivation, Maya found solace in the embrace of her hardworking parents heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred",
                "vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with these unprecedented advancements come complex ethical and societal implications that must be carefully navigated. As technology becomes increasingly intertwined with every aspect of our lives, questions of privacy, security, and algorithmic bias loom large. It is imperative that we approach the development and deployment of these technologies with a keen awareness of their potential risks and pitfalls, striving always to mitigate harm and promote the greater good. In the grand tapestry of human progress, the future of technology is a thread woven with the aspirations and ingenuity of countless individuals striving to push the boundaries of what is possible. As we journey forward into this brave new world, let us embrace the opportunities that lie before us with humility and foresight, mindful always of the profound impact that our actions today will have on the world of tomorrow. For in the crucible of innovation, we have the power to shape a future that is not only technologically advanced, but also equitable, inclusive, and just. At the heart of this technological renaissance lies the inexorable march of artificial intelligence (AI) and machine learning (ML), poised to transform every aspect of our lives in ways both profound and pervasive. From autonomous vehicles navigating city streets to smart assistants managing our daily routines, AI systems are becoming increasingly integrated into the fabric of society, augmenting human capabilities and revolutionizing industries with unprecedented efficiency and insight. Yet, as we marvel at the wonders of AI and ML, we must also grapple with the ethical and societal implications of their proliferation. Questions of algorithmic bias, data privacy, and the displacement of human labor loom large, challenging us to navigate the complex terrain of technological advancement with wisdom and foresight. It is incumbent upon us to ensure that these powerful tools are wielded responsibly, with a steadfast commitment to equity, transparency, and social good. Meanwhile, the convergence of vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with",
                "Rain lashed against the windows of Daniel's tiny apartment, mirroring the storm brewing within him. His dream of becoming a professional dancer felt further away than ever. A nagging knee injury had sidelined him for months, the doctor's words echoing in his ears, You might have to find a new passion, son. Despair threatened to consume him. Yet, a flicker of defiance sparked in his eyes as he stared at the worn ballet shoes by his bed. Memories flooded back – the exhilaration of mastering a pirouette, the camaraderie of fellow dancers, the sheer joy of movement. He wouldn't let an injury steal his passion. The road to recovery was arduous. Physical therapy became his new dance routine, each step a battle against pain and self-doubt. He spent hours researching alternative training methods, his apartment transforming into a makeshift studio. Yoga mats became balance beams, furniture turned into makeshift barres. The rain outside continued its relentless rhythm, but inside, a different melody played – the determined thrum of his will. He started small, simple stretches and strengthening exercises, the frustration of limitations a constant companion. But with each passing day, a flicker of his former strength returned. The once-sharp sting in his knee dulled to a manageable throb. One day, a local dance studio offered a free introductory class for those with physical limitations. Daniel, his heart pounding with a mix of hope and trepidation, hobbled through the door. The sight of other dancers, their bodies moving with a grace that defied their limitations, ignited a fire within him. He participated, sweat beading on his brow, pushing his limits with every move. The instructor, a kind woman with eyes that held the wisdom of countless battles won, noticed his determination. She became his mentor, tailoring exercises to his needs, her belief a constant source of encouragement. Months later, Daniel wasn't the same dancer. His movements held a newfound power, a testament to his unwavering spirit. He performed in a special showcase for dancers with disabilities, his routine a masterpiece of resilience and artistry. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Rain lashed against the windows of Daniel's tiny apartment, mirroring the storm brewing within him. His dream of becoming a professional dancer felt further away than ever. A nagging knee injury had sidelined him for months, the doctor's words echoing in his ears, You might have to find a new passion, son. Despair threatened to consume him. Yet, a flicker of defiance sparked in his eyes as he stared at the worn ballet shoes by his bed. Memories flooded back – the exhilaration of mastering a pirouette, the camaraderie of fellow dancers, the sheer joy of movement. He wouldn't let an injury steal his passion. The road to recovery was arduous. Physical therapy became his new dance routine, each step a battle against pain and self-doubt. He spent hours researching alternative training methods, his apartment transforming into a makeshift studio. Yoga mats became balance beams, furniture turned into makeshift barres. The rain outside continued its relentless rhythm, but inside, a different melody played – the determined thrum of his will. He started small, simple stretches and strengthening exercises, the frustration of limitations a constant companion. But with each passing day, a flicker of his former strength returned. The once-sharp sting in his knee dulled to a manageable throb. One day, a local dance studio offered a free introductory class for those with physical limitations. Daniel, his heart pounding with a mix of hope and trepidation, hobbled through the door. The sight of other dancers, their bodies moving with a grace that defied their limitations, ignited a fire within him. He participated, sweat beading on his brow, pushing his limits with every move. The instructor, a kind woman with eyes that held the wisdom of countless battles won, noticed his determination. She became his mentor, tailoring exercises to his needs, her belief a constant source of encouragement. Months later, Daniel wasn't the same dancer. His movements held a newfound power, a testament to his unwavering spirit. He performed in a special showcase for dancers with disabilities, his routine a masterpiece of resilience and artistry. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into",

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
        let maxTime = 180;
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