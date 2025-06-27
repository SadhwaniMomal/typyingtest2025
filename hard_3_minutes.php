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
    <title>TypingTwist.com - Three_Minute_Hard</title>
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
    padding: 5rem;
    
    }
    
.container button {
  
    margin-top: 3rem;

}
.paragraphtext{
    width: 43rem;
    padding: 14px 17px 9px 17px;
}  
.paragraphtext1{
    width: 43rem;
    padding: 14px 17px 9px 17px;
    margin-left: 1rem;
}  
.sad-img , .happy-img{
display: none;
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
            <img src="./image/sad.png" alt="" class="sad-img"
                style="height: 18rem; width: 18rem; margin-left: 28rem; margin-top:2rem; position:absolute ">
            <p class="paragraphtext">
            <span class="headingtext" style="font-size:1.3rem; margin-bottom: .1rem; display:block; font-weight: bold;">
            Why can't typists speed up Easily?</span> Many people struggle to improve their typing speed and typing test results because they don't practice
             regularly or focus on accuracy. They might not learn the right finger positions or use typing exercises 
             that can help. Without these important steps, it's hard to get better at typing quickly and smoothly. 
             But with consistent practice and the right techniques, anyone can improve their typing speed and 
             efficiency. Remember to take breaks to avoid fatigue, use typing games to make practice fun, and 
             gradually challenge yourself with more difficult texts.</p>
            <img src="./image/happy.png" alt="" class="happy-img"
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
                "development of the novel as a literary form is a fascinating journey spanning centuries, cultures, and genres. From its humble beginnings as oral tales passed down through generations to its current status as a dominant literary form, the novel has undergone significant evolution, shaped by historical, social, and technological factors. One of the earliest precursors to the modern novel can be found in ancient storytelling traditions, where epic poems and oral narratives served as vehicles for conveying complex plots and characters. These early forms laid the groundwork for the novel by introducing elements such as character development, plot progression, and thematic exploration. The emergence of the novel as we recognize it today can be traced back to the rise of the printing press in the 15th century. With the invention of movable type, books became more accessible to the general population, leading to an increase in literacy rates and a growing demand for new forms of literature. This technological advancement provided writers with the opportunity to reach a wider audience and experiment with new narrative techniques. During the 18th and 19th centuries, the novel experienced a period of tremendous growth and innovation, often referred to as the 'golden age' of the novel. Writers such as Daniel Defoe, Samuel Richardson, and Henry Fielding in England, and Honore de Balzac, Gustave Flaubert, and Leo Tolstoy in France and Russia, respectively, pushed the boundaries of the form, exploring themes of morality, society, and human nature. The 20th century saw further experimentation and diversification within the novel genre. Modernist writers such as James Joyce, Virginia Woolf, and Franz Kafka challenged traditional narrative structures and conventions, experimenting with stream-of-consciousness writing, nonlinear storytelling, and fragmented narratives. These innovations paved the way for the development of postmodern literature, characterized by its skepticism of grand narratives and its playful manipulation of language and form. In addition to technological advancements and changing literary trends, the development of the novel has also been influenced by social and cultural factors. The rise of colonialism, globalization, and industrialization led to shifts in perspective and subject matter, as writers sought to capture the complexities of a rapidly changing world. Issues of race, gender, class, and identity became increasingly prominent themes within the novel, reflecting the social upheavals and struggles of the times. Today, the novel continues to evolve and adapt to new cultural, technological, and artistic trends. The advent of digital publishing and the rise of e-books have democratized the publishing process, allowing aspiring writers to bypass traditional gatekeepers and reach audiences directly. At the same time, social media and online communities have provided platforms for writers to connect with readers, share their work, and receive feedback in real-time. In conclusion, the development of the novel is a testament to the enduring power of storytelling and the human imagination. From its origins in oral tradition to its current status as a global literary phenomenon, the novel has continually evolved and adapted to the changing needs and desires of readers and writers alike. As we look to the future, it is clear that the novel will continue to thrive as a vibrant and dynamic form of artistic expression. The development of the novel is a multifaceted process influenced by various cultural, historical, and technological factors. One crucial aspect of this evolution is the role of individual writers and their contributions to shaping the form and content of the novel. Early novelists such as Daniel Defoe and Samuel Richardson pioneered the use of realistic detail and psychological depth in their works, laying the foundation for the modern novel's emphasis on character development and internal conflict. Defoe's 'Robinson Crusoe' (1719) and Richardson's 'Pamela' (1740) are considered early examples of the novel form, exploring themes of survival, isolation, and morality. The 19th century saw the rise of the novel as a dominant literary form, with writers like Jane Austen, Charles Dickens, and George Eliot producing some of the most enduring works in the English language. Austen's keen observations of social manners and relationships in novels like 'Pride' and Prejudice (1813) and Emma (1815) established her as a master of the domestic comedy of manners. Dickens, on the other hand, used his novels, such as Oliver Twist (1837-1839) and Great Expectations (1860-1861), to expose the social injustices and inequalities of Victorian society. Meanwhile, in Russia, writers like Fyodor Dostoevsky and Leo Tolstoy were exploring existential and philosophical themes in their novels, such as Crime and Punishment (1866) and War and Peace (1869). These works delved deep into the human psyche, grappling with questions of morality, redemption, and the nature of existence. The 20th century witnessed a proliferation of literary movements and styles, each leaving its mark on the novel. The modernist experimentation of writers like James Joyce, Virginia Woolf, and Marcel Proust pushed the boundaries of narrative technique and structure, challenging readers to rethink their understanding of time, consciousness, and reality. Joyce's Ulysses (1922), Woolf's Mrs. Dalloway (1925), and Proust's In Search of Lost Time (1913-1927) are all seminal works of modernist fiction that continue to influence writers today. The mid-20th century saw the emergence of postmodern literature, characterized by its self-reflexivity, irony, and skepticism toward traditional narratives. Writers like Thomas Pynchon, Don DeLillo, and Italo Calvino experimented with metafictional devices and playful storytelling techniques, blurring the lines between reality and fiction. Pynchon's Gravity's Rainbow (1973) and DeLillo's White Noise (1985) are prime examples of postmodern",
                "Drama in the 20th century underwent a profound transformation, reflecting the tumultuous events and shifting cultural landscapes of the era. From the emergence of modernism to the exploration of identity, politics, and social change, playwrights grappled with a multitude of themes and styles, pushing the boundaries of theatrical expression. At the dawn of the 20th century, realism dominated the theatrical landscape. Playwrights such as Henrik Ibsen and Anton Chekhov revolutionized drama with their introspective explorations of human psychology and societal norms. Ibsen's A Doll's House and Chekhov's The Cherry Orchard challenged conventional notions of gender, class, and morality, setting the stage for the experimentation to come. As the century progressed, the avant-garde movements of modernism and expressionism emerged, rejecting traditional narrative structures and embracing fragmented, subjective forms of storytelling. Playwrights like Bertolt Brecht and Samuel Beckett shattered theatrical conventions with works such as Mother Courage and Her Children and Waiting for Godot, using alienation techniques and absurdist elements to provoke audiences and prompt critical reflection on the human condition. The mid-20th century witnessed the rise of political drama, as playwrights responded to the tumult of world events such as World War II, the Cold War, and the Civil Rights Movement. Arthur Miller's Death of a Salesman and Lorraine Hansberry's A Raisin in the Sun tackled issues of capitalism, identity, and systemic oppression, highlighting the struggles of ordinary individuals against powerful social forces. The latter half of the century saw a resurgence of realism, as playwrights grappled with the complexities of postmodernism and the fragmentation of social structures. August Wilson's Fences and Tony Kushner's Angels in America explored race, sexuality, and the AIDS epidemic with unflinching honesty, offering a nuanced portrait of American society in flux. Meanwhile, the rise of globalization and the digital age gave rise to new forms of theatrical experimentation. Playwrights such as Sarah Kane and Caryl Churchill pushed the boundaries of form and content with works like Blasted and Top Girls, challenging audiences to confront uncomfortable truths about power, violence, and gender. In the 21st century, drama continues to evolve in response to the ever-changing world around us. Playwrights like Suzan-Lori Parks and Lin-Manuel Miranda are expanding the possibilities of the medium, blending traditional theatrical forms with elements of music, dance, and multimedia to create immersive, interdisciplinary experiences that speak to contemporary audiences. Through it all, the power of drama to provoke, challenge, and inspire remains undiminished. Whether reflecting on the struggles of the individual or the complexities of society, 20th century dramas continue to resonate with audiences around the world, reminding us of the enduring relevance of the theatrical form in an ever-changing world. In the aftermath of World War II, the world witnessed a surge of existentialist themes in drama, as playwrights grappled with the absurdity of human existence in the face of modernity and technological advancement. Samuel Beckett's Waiting for Godot epitomized this existential angst, presenting a bleak yet humorous meditation on the futility of life and the search for meaning. Similarly, Eugene Ionesco's The Bald Soprano and Jean Genet's The Balcony explored themes of alienation, identity, and the breakdown of language and communication in a rapidly changing world. Theater of the Absurd, as this movement came to be known, rejected traditional notions of plot, character, and dialogue, favoring instead a fragmented, episodic structure that mirrored the chaos and uncertainty of contemporary life. Playwrights like Edward Albee (The Zoo Story), Harold Pinter (The Birthday Party), and Tom Stoppard (Rosencrantz and Guildenstern Are Dead) continued to push the boundaries of theatrical form, challenging audiences to question their assumptions and confront the absurdity of the human condition. In the realm of political drama, the latter half of the 20th century saw a proliferation of works that engaged with pressing social issues and historical events. Arthur Miller's The Crucible drew parallels between the Salem witch trials and McCarthyism, while Tony Kushner's Angels in America tackled the AIDS epidemic and the Reagan era with searing intensity. Meanwhile, Athol Fugard's Master Harold... and the Boys and John Guare's Six Degrees of Separation explored race, class, and the legacy of colonialism in South Africa and America, respectively. The 20th century also witnessed the emergence of feminist theater, as women playwrights began to assert their voices and challenge patriarchal norms within the theatrical establishment. Works like Caryl Churchill's 'Top Girls' and Wendy Wasserstein's 'The Heidi Chronicles' offered incisive critiques of gender roles and societal expectations, while also celebrating the resilience and agency of women in the face of adversity. As the century drew to a close, the boundaries between high and low culture began to blur, giving rise to new forms of theatrical expression influenced by popular culture and mass media. Playwrights like Tracy Letts ('August: Osage County') and Sarah Ruhl ('In the Next Room (or The Vibrator Play)') drew inspiration from television, film, and the internet, creating works that blended elements of comedy, drama, and surrealism to reflect the fragmented nature of contemporary experience. In conclusion, the dramas of the 20th century reflect the diverse and tumultuous nature of the times in which they were written. From the existential angst of the post-war era to the political upheavals of the 1960s and 70s, playwrights grappled with a myriad of themes and styles, pushing the boundaries of theatrical form and content in the process. As we move further into the 21st century, the legacy of",
                "Pakistani literature is a rich tapestry of diverse voices, reflecting the country's complex history, culture, and social dynamics. From classical poetry to contemporary fiction, Pakistani literature encompasses a wide range of genres and themes. One of the most celebrated figures in Pakistani literature is Allama Muhammad Iqbal, whose poetry played a pivotal role in the country's struggle for independence. His works, such as 'Bang-e-Dra' and 'Asrar-e-Khudi,' explore themes of self-discovery, spiritual awakening, and national identity, inspiring generations of Pakistanis. Another towering figure is Faiz Ahmed Faiz, renowned for his revolutionary poetry that spoke truth to power. His poems, including 'Bol' and 'Hum Dekhenge,' resonate with themes of social justice, equality, and resistance against oppression. Faiz's words continue to inspire activists and artists alike. In the realm of fiction, Pakistani literature boasts a diverse array of voices. Writers like Intizar Hussain, Bapsi Sidhwa, and Abdullah Hussain have made significant contributions to Urdu literature, crafting nuanced narratives that explore themes of tradition, modernity, and identity. Contemporary Pakistani fiction has gained international acclaim, with authors like Mohsin Hamid, Kamila Shamsie, and Mohammed Hanif garnering widespread recognition. Their works, such as 'The Reluctant Fundamentalist,' 'Home Fire,' and 'A Case of Exploding Mangoes,' grapple with issues ranging from globalization and terrorism to love and betrayal, offering nuanced insights into Pakistani society. Pakistani literature is not confined to Urdu; it also encompasses vibrant regional literatures, such as Punjabi, Sindhi, Pashto, Balochi, and Saraiki. Writers like Ahmad Faraz, Saadat Hasan Manto, and Quratulain Haider have made significant contributions to these languages, enriching the cultural landscape of Pakistan. Moreover, Pakistani literature reflects the country's multicultural heritage, with writers from diverse ethnic and religious backgrounds adding their voices to the literary canon. From the mystical poetry of Bulleh Shah to the modernist prose of Abdullah Hussain, Pakistani literature celebrates the plurality of its people's experiences. Despite its richness and diversity, Pakistani literature faces numerous challenges, including censorship, political instability, and limited access to education and publishing opportunities. However, writers and activists continue to defy these obstacles, using their pen as a tool for social change and cultural revival. In conclusion, Pakistani literature is a testament to the resilience and creativity of its people. From classical poetry to contemporary fiction, it offers a window into the complexities of Pakistani society and the human experience at large, inviting readers to explore its rich tapestry of voices and narratives. Pakistani literature is deeply rooted in the country's cultural heritage, drawing inspiration from its diverse traditions, languages, and landscapes. The oral tradition, particularly folklore and Sufi poetry, has exerted a profound influence on Pakistani literature, shaping its themes, motifs, and narrative structures. Writers like Waris Shah, Shah Abdul Latif Bhittai, and Bulleh Shah have immortalized these oral traditions in their works, preserving the collective wisdom and spirituality of the people. One notable aspect of Pakistani literature is its engagement with pressing social and political issues. Writers often use their creative platforms to critique injustices, challenge power structures, and advocate for change. For instance, the works of Ismat Chughtai and Quratulain Haider confront gender inequality and patriarchy, while those of Saadat Hasan Manto and Umera Ahmed explore the complexities of human nature and societal taboos. The Partition of 1947, which led to the creation of Pakistan, has been a recurring theme in Pakistani literature, offering writers a lens through which to examine the traumatic legacy of partition and its impact on individual lives and communities. Authors like Saadat Hasan Manto, Intizar Hussain, and Bapsi Sidhwa have depicted the human cost of partition with empathy and nuance, shedding light on stories of loss, displacement, and resilience. In recent years, Pakistani literature has witnessed a resurgence in global recognition, thanks in part to the success of diaspora writers like Mohsin Hamid, Kamila Shamsie, and Nadeem Aslam. Their novels, such as 'The Reluctant Fundamentalist,' 'Home Fire,' and 'The Blind Man's Garden,' offer nuanced portrayals of Pakistani society and its intersections with the wider world, challenging stereotypes and fostering cross-cultural understanding. The emergence of digital platforms and social media has also transformed the landscape of Pakistani literature, providing a platform for emerging writers to share their work and engage with audiences on a global scale. Online literary magazines, blogs, and forums have become incubators of new talent, fostering a vibrant literary community that transcends geographical boundaries. Despite these advancements, Pakistani literature continues to grapple with internal and external challenges. Censorship, self-censorship, and threats to freedom of expression remain persistent concerns, hindering the growth and diversity of literary voices. Additionally, socio-economic disparities and limited access to education pose barriers to literary participation and readership, particularly in rural and marginalized communities. In response to these challenges, grassroots initiatives, literary festivals, and cultural organizations have emerged to promote literacy, creativity, and dialogue through literature. Events like the Lahore Literary Festival and Karachi Literature Festival provide platforms for writers, scholars, and readers to come together, exchange ideas, and celebrate the power of storytelling. In conclusion, Pakistani literature is a vibrant tapestry of voices, narratives, and perspectives that reflect the complexities of Pakistani society and",
                "Albert Einstein, renowned for his groundbreaking contributions to physics and his iconic equation E=mc², was much more than a scientist. Born in Ulm, Germany, in 1879, Einstein demonstrated an early interest in mathematics and science. However, his unconventional thinking and rebellious spirit often clashed with the traditional educational system. After completing his schooling, Einstein faced difficulties in finding academic employment due to his unconventional nature and pacifist beliefs. Despite these challenges, he continued his studies independently while working menial jobs to support himself. In 1905, often referred to as his 'miracle year,' Einstein published four papers that revolutionized physics. These papers laid the foundation for modern theoretical physics and earned him worldwide recognition. One of Einstein's most famous contributions was the theory of relativity, which fundamentally changed our understanding of space, time, and gravity. The special theory of relativity, published in 1905, showed that the laws of physics are the same for all non-accelerating observers and that the speed of light is constant in a vacuum. This theory led to the famous equation E=mc², which describes the equivalence of mass and energy. In 1915, Einstein completed his general theory of relativity, which provided a new understanding of gravity as the curvature of spacetime caused by mass and energy. This theory predicted phenomena such as gravitational time dilation and the bending of light around massive objects, which were later confirmed through observation. Einstein's work had profound implications for cosmology, astrophysics, and our understanding of the universe's origin and evolution. His theories provided the theoretical framework for concepts such as the Big Bang theory and black holes, shaping the field of modern cosmology. Beyond his scientific achievements, Einstein was also an outspoken advocate for peace, civil rights, and social justice. He spoke out against militarism, nationalism, and authoritarianism, advocating for disarmament and international cooperation. Einstein's humanitarian efforts earned him respect and admiration around the world, and he became a symbol of intellectual integrity and moral courage. Throughout his life, Einstein remained deeply curious about the nature of the universe and continued to pursue new ideas and avenues of research. He made significant contributions to quantum theory, leading to the development of quantum mechanics. However, he also grappled with the implications of quantum theory's probabilistic nature, famously stating that 'God does not play dice with the universe. 'Einstein's legacy extends far beyond his scientific achievements. His name has become synonymous with genius, creativity, and intellectual curiosity. He inspired generations of scientists, thinkers, and activists to question the status quo, think critically, and strive for a better understanding of the world. In 1952, Einstein was offered the presidency of Israel, but he declined, stating that he lacked the necessary qualifications for such a political position. He continued his scientific work until his death in 1955, leaving behind a legacy that continues to shape our understanding of the universe and our place within it. Einstein's impact on the scientific community extended beyond his own research. He played a key role in the development of quantum theory, despite his initial skepticism toward its probabilistic interpretation. His debates with physicists such as Niels Bohr and his thought experiments, like the famous Einstein-Podolsky-Rosen paradox, challenged the foundations of quantum mechanics and spurred further inquiry into the nature of reality. In addition to his scientific pursuits, Einstein was deeply engaged in philosophical and ethical discussions. He believed in the importance of combining scientific knowledge with moral and ethical principles, famously stating, 'Science without religion is lame, religion without science is blind. ' His reflections on the nature of truth, beauty, and the human condition continue to inspire thinkers across disciplines. Einstein's fame and influence transcended national borders and academic boundaries. He was a global icon, celebrated for his intellect, wit, and humility. His public lectures drew large crowds, and his correspondence with fellow scientists, world leaders, and ordinary citizens reflected his commitment to dialogue and collaboration. Despite his achievements, Einstein remained modest and self-effacing, often expressing surprise at his own success. He believed in the importance of humility and open-mindedness, encouraging others to question authority and think for themselves. In his later years, Einstein focused on humanitarian causes, advocating for nuclear disarmament and civil rights. He was a vocal critic of McCarthyism and racial segregation, using his platform to speak out against injustice and oppression. Einstein's legacy continues to inspire scientists, scholars, and activists around the world. His work paved the way for countless scientific breakthroughs and technological advancements, while his moral courage and commitment to social justice serve as a reminder of the responsibilities that come with knowledge and power. In conclusion, Albert Einstein was not only a brilliant scientist but also a visionary thinker, a passionate advocate for peace, and a symbol of intellectual curiosity and moral integrity. His contributions to physics revolutionized our understanding of the universe, while his humanitarian efforts continue to inspire generations to work toward a better, more just world. Einstein's life and work remind us of the power of human intellect, imagination, and compassion to shape the course of history. Einstein's personal life also reflects his complex and multifaceted personality. He had a tumultuous romantic life, with two failed marriages and numerous extramarital affairs. Despite his professional success, Einstein struggled with interpersonal relationships and",
                "Poetry, as an art form, has deep roots in human history, dating back thousands of years. Its origins are intertwined with the earliest civilizations and oral traditions of storytelling. From ancient civilizations like Mesopotamia, Egypt, and Greece to medieval Europe and beyond, poetry has been a fundamental means of expressing human thoughts, emotions, and experiences. In ancient Mesopotamia, the Epic of Gilgamesh stands as one of the earliest known works of literature, composed in poetic form. This epic poem, written in cuneiform on clay tablets, tells the story of Gilgamesh, a legendary king of Uruk, and his quest for immortality. It reflects the worldview, values, and concerns of its time, offering insights into the human condition and the quest for meaning. Similarly, ancient Egyptian literature, including the famous Pyramid Texts and the Book of the Dead, contains poetic elements. These texts, inscribed on the walls of tombs and written on papyrus scrolls, served religious and funerary purposes, guiding the deceased through the afterlife and invoking divine protection. In ancient Greece, poetry played a central role in cultural and intellectual life. The works of Homer, including the Iliad and the Odyssey, are among the most celebrated epic poems in Western literature. These epic narratives, composed in dactylic hexameter, recount the heroic exploits of warriors like Achilles and Odysseus, blending history, mythology, and moral philosophy. During the medieval period in Europe, poetry flourished within the context of courtly love and chivalry. Troubadours and trouveres composed lyrical poems in vernacular languages, such as Old French and Occitan, celebrating romantic love, chivalric ideals, and the beauty of nature. The troubadour tradition, originating in southern France, spread throughout Europe, influencing the development of poetic forms and themes. In the Islamic world, Arabic poetry reached new heights of sophistication and elegance during the medieval period. The Arabic poetic tradition, characterized by intricate rhyme schemes and complex meters, produced renowned poets such as Al-Mutanabbi and Abu Nuwas. Poetry served as a means of expressing spiritual devotion, political commentary, and personal introspection within the context of Islamic culture and civilization. The Renaissance period witnessed a revival of interest in classical poetry and literary forms, as scholars and writers looked to ancient Greece and Rome for inspiration. Poets like Petrarch and Dante in Italy, and Shakespeare and Milton in England, explored themes of love, mortality, and the human condition with unparalleled depth and complexity. Their works, including Petrarch's sonnets, Dante's Divine Comedy, Shakespeare's plays and sonnets, and Milton's Paradise Lost, continue to be studied and admired for their poetic beauty and intellectual richness. Throughout history, poetry has evolved in response to changing social, cultural, and political contexts, reflecting the diversity of human experience and the enduring power of language to convey meaning and emotion. From the oral traditions of ancient civilizations to the sophisticated literary forms of the modern era, poetry remains a vibrant and essential aspect of human expression. Poetry, as an art form, holds a unique position in human culture, transcending time and space to communicate the deepest aspects of the human experience. Its historical background is rich and diverse, spanning millennia and encompassing a multitude of cultures and civilizations. In ancient times, poetry emerged as an essential means of storytelling and communication. In civilizations like Mesopotamia, Egypt, and Greece, oral traditions played a crucial role in preserving cultural heritage and transmitting knowledge from one generation to the next. Epic poems like the Epic of Gilgamesh in Mesopotamia and the works of Homer in Greece were passed down orally before being written down, showcasing the power of poetry to encapsulate the values, beliefs, and struggles of entire societies. As civilizations evolved, so too did the forms and functions of poetry. In ancient Egypt, poetry was closely linked to religious beliefs and practices, with texts like the Pyramid Texts and the Book of the Dead serving as guides for the deceased in the afterlife. In Greece, poetry took on a more secular and literary character, with poets like Sappho and Pindar exploring themes of love, beauty, and heroism through lyric and choral poetry. The medieval period witnessed the emergence of new poetic traditions in Europe, shaped by the influences of Christianity, courtly love, and chivalry. Troubadours and trouveres in France composed lyric poetry in vernacular languages, celebrating the ideals of courtly love and the beauty of nature. In the Islamic world, Arabic poetry reached new heights of sophistication and elegance, with poets like Al-Mutanabbi and Abu Nuwas exploring themes of love, longing, and spiritual devotion. The Renaissance brought a renewed interest in classical poetry and literature, as scholars and writers rediscovered the works of ancient Greece and Rome. Poets like Petrarch, Dante, Shakespeare, and Milton drew inspiration from classical models while forging new poetic forms and styles. Petrarch's sonnets, Dante's Divine Comedy, Shakespeare's plays and sonnets, and Milton's Paradise Lost exemplify the diversity and depth of Renaissance poetry, exploring themes of love, redemption, and the search for meaning in a changing world. In more recent centuries, poetry has continued to evolve in response to shifting cultural, social, and political dynamics. From the Romantic poets of the 18th and 19th centuries, who celebrated the beauty of nature and the imagination, to the modernist poets of the 20th century, who experimented with language and form in response to the upheavals of modernity, poetry has remained a vital and dynamic form of artistic expression. Today, poetry continues to thrive in diverse forms and mediums, from traditional printed collections to",
                "Shakespearean dramas, penned by the renowned playwright William Shakespeare during the late 16th and early 17th centuries, are enduring masterpieces that continue to captivate audiences worldwide. These timeless works not only showcase Shakespeare's unparalleled literary genius but also provide profound insights into human nature, society, and the complexities of the human condition. Shakespeare's dramatic career began in the 1590s, during the Elizabethan era, a period marked by flourishing artistic and intellectual endeavors in England. His earliest plays, known as the 'early comedies,' include works such as 'The Comedy of Errors' (1592), 'The Two Gentlemen of Verona' (1594), and 'A Midsummer Night's Dream' (1595-1596). These comedies, characterized by their witty dialogue, mistaken identities, and romantic entanglements, established Shakespeare's reputation as a playwright of exceptional talent and creativity. During the early 1590s, Shakespeare also delved into historical drama with plays like 'Henry VI, Part 1' (1590), 'Henry VI, Part 2' (1590-1591), and 'Henry VI, Part 3' (1591). These works, collectively known as the 'Henry VI' trilogy, explore the tumultuous events of the Wars of the Roses, depicting political intrigue, power struggles, and the tragic consequences of ambition and betrayal. In the mid-1590s, Shakespeare's focus shifted towards the genre of romantic comedy with plays like 'Romeo and Juliet' (1595-1596), 'The Merchant of Venice' (1596-1597), and 'Much Ado About Nothing' (1598-1599). 'Romeo and Juliet,' in particular, remains one of Shakespeare's most beloved works, renowned for its poignant portrayal of youthful passion and the timeless themes of love and fate. The turn of the century saw Shakespeare's exploration of darker and more complex themes in his tragedies. 'Hamlet' (1600-1601), considered one of his greatest achievements, delves into the existential angst of its titular character, grappling with questions of mortality, revenge, and the nature of truth. 'Othello' (1603-1604) and 'King Lear' (1605-1606) further showcase Shakespeare's mastery of tragedy, probing into the depths of human depravity, jealousy, and madness. In the later years of his career, Shakespeare returned to the genre of romance with plays like 'The Winter's Tale' (1609-1611) and 'The Tempest' (1610-1611). These works blend elements of comedy, tragedy, and fantasy, offering meditations on forgiveness, redemption, and the power of transformation. Shakespeare's legacy as the preeminent playwright of the English language is unparalleled, with his works continuing to be performed, studied, and revered across the globe. His enduring influence on literature, theater, and culture underscores the universal appeal and timeless relevance of his dramas, ensuring that they remain cherished classics for generations to come. Shakespearean dramas not only reflect the societal and political landscape of Elizabethan and Jacobean England but also transcend temporal and cultural boundaries, speaking to audiences of all ages and backgrounds. Shakespeare's profound understanding of human nature allows his characters to resonate with audiences across centuries, as they grapple with timeless themes such as love, jealousy, ambition, and the pursuit of power. The staging and performance of Shakespeare's plays were integral to their success during his lifetime. The Globe Theatre, where many of his works were first performed, provided a dynamic and immersive experience for audiences, with its open-air design and proximity to the stage fostering a sense of intimacy and engagement. The actors, often male, would perform multiple roles, showcasing their versatility and skill in bringing Shakespeare's characters to life. Shakespeare's language, characterized by its rich imagery, poetic meter, and linguistic inventiveness, remains a hallmark of his work. His mastery of verse and prose allows him to convey complex emotions and ideas with remarkable clarity and depth. Through his use of soliloquies, asides, and dramatic irony, Shakespeare invites audiences into the inner thoughts and motivations of his characters, creating layers of meaning and interpretation. The enduring popularity of Shakespearean dramas is evident in their continued adaptation and reinterpretation in various forms of media, including film, television, and literature. Countless filmmakers and directors have been drawn to the timeless themes and dramatic intensity of Shakespeare's works, producing adaptations that range from faithful recreations to bold reimaginings set in contemporary or alternative settings. Moreover, Shakespeare's influence extends beyond the realm of literature and theater, permeating popular culture and shaping the way we think about language, storytelling, and the human experience. His coined phrases, such as 'to be or not to be' and 'all the world's a stage,' have become ingrained in the English lexicon, demonstrating the enduring impact of his words and ideas. In conclusion, Shakespearean dramas continue to captivate and inspire audiences around the world, transcending the boundaries of time, language, and culture. Through his unparalleled literary talent and profound insight into the human condition, Shakespeare has left an indelible mark on the world of literature and theater, ensuring that his legacy will endure for generations to come. Shakespeare's dramas are not only literary masterpieces but also serve as historical and cultural artifacts that provide valuable insights into the society, politics, and beliefs of Renaissance England. His plays often explore themes such as class, gender, race, and religion, reflecting the social complexities of his time and challenging prevailing norms and conventions. For instance, in 'Othello,' Shakespeare examines the destructive power of jealousy and racism through the tragic downfall of the Moorish general, Othello, and his ensign, Iago. The play exposes the prejudices and biases that underlie society's attitudes towards race and ethnicity, while also probing",
                "The Mughal Dynasty, one of the most prominent and influential empires in Indian history, reigned over the Indian subcontinent for over three centuries, from the early 16th century to the mid-19th century. Its rise, expansion, and eventual decline offer a captivating narrative that encompasses political intrigue, cultural richness, and significant historical events. The origins of the Mughal Empire trace back to Babur, a descendant of both Genghis Khan and Tamerlane. In 1526, Babur, with an army mainly composed of Central Asian warriors, defeated Ibrahim Lodi, the Sultan of Delhi, at the Battle of Panipat. This victory marked the beginning of the Mughal Empire in India. Babur's reign, though short-lived, laid the foundation for the empire, establishing administrative structures and introducing Persian cultural elements. Babur's son, Humayun, faced numerous challenges during his reign, including internal rebellions and external invasions. He lost and regained his empire before his untimely death, leaving a mixed legacy. However, it was under the reign of his son, Akbar the Great, that the Mughal Empire reached its zenith. Akbar, known for his military conquests, diplomatic skills, and religious tolerance, expanded the empire to its greatest territorial extent. He introduced administrative reforms, such as the division of the empire into provinces called 'subahs,' each headed by a governor or subahdar. Akbar's policy of Sulh-e-kul, or universal tolerance, promoted harmony among people of different religions, earning him admiration from both contemporaries and historians. Akbar's successors, particularly Jahangir and Shah Jahan, continued the tradition of architectural splendor and patronage of the arts. Jahangir's reign is often remembered for the flourishing of Mughal painting, characterized by intricate details and vibrant colors. Shah Jahan, renowned for constructing the Taj Mahal in memory of his beloved wife Mumtaz Mahal, also left a legacy of architectural marvels, including the Red Fort in Delhi and the Jama Masjid. However, the latter half of the 17th century witnessed the decline of the Mughal Empire. Aurangzeb, Shah Jahan's successor, expanded the empire to its greatest geographical extent but also faced challenges, including prolonged military campaigns and strained finances. His policies, marked by religious intolerance and heavy taxation, contributed to the empire's decline. The empire faced increasing pressure from regional powers and European colonial forces, particularly the British East India Company. By the early 18th century, the Mughal Empire had become decentralized, with regional governors asserting autonomy and European powers gaining influence. The period known as the 'Mughal Twilight' saw the empire's gradual decline, marked by internal strife, succession disputes, and economic stagnation. The death knell for the Mughal Empire came with the invasion of Nadir Shah of Persia in 1739, who sacked Delhi and looted its treasures, causing immense devastation. Subsequent invasions and conflicts further weakened the empire, leading to its eventual demise. The British East India Company, taking advantage of the power vacuum, gradually asserted control over Indian territories, effectively ending Mughal rule. Despite its decline, the Mughal Dynasty left an indelible mark on Indian history and culture. Its architectural marvels, administrative innovations, and cultural contributions continue to be admired and studied to this day. The legacy of the Mughal Empire serves as a reminder of the complex interplay of power, culture, and religion in shaping the history of the Indian subcontinent. The Mughal Dynasty's impact extended beyond politics and administration, profoundly shaping the socio-cultural fabric of the Indian subcontinent. One of the most enduring legacies of the Mughals is their contribution to art and architecture. Mughal architecture, characterized by its grandeur, symmetry, and intricate ornamentation, blended Persian, Indian, and Islamic influences to create iconic structures that still captivate the imagination. The Taj Mahal, commissioned by Shah Jahan as a mausoleum for his beloved wife, Mumtaz Mahal, stands as a testament to Mughal architectural genius. Its pristine white marble, intricately carved motifs, and symmetrical design make it one of the most recognizable landmarks in the world. Other architectural marvels, such as the Red Fort in Delhi, the Agra Fort, and the Jama Masjid, showcase the Mughals' mastery of design and engineering. Mughal patronage also fostered the development of literature, poetry, and music. The Mughal courts were centers of artistic excellence, where poets like Mirza Ghalib and musicians like Tansen thrived. Mughal painting, characterized by its rich colors, detailed miniature work, and themes drawn from Persian and Indian mythology, reached its zenith under Akbar and Jahangir. The illustrated manuscripts of the Akbarnama and the Hamzanama are prime examples of Mughal artistic expression. The Mughal Empire was not only a political and cultural force but also a hub of economic activity and trade. The empire's strategic location at the crossroads of trade routes facilitated commerce and exchange between Europe, the Middle East, and East Asia. Cities like Delhi, Agra, and Lahore flourished as centers of trade, attracting merchants and artisans from far and wide. Religion played a significant role in Mughal society, with Islam serving as the official state religion. However, the Mughal emperors adopted a policy of religious tolerance, allowing Hindus, Sikhs, Christians, and others to practice their faiths freely. Akbar's Din-i Ilahi, a syncretic religion that sought to blend elements of Islam, Hinduism, Christianity, and Zoroastrianism, reflected his commitment to religious pluralism. Despite its cultural achievements and administrative innovations, the Mughal Empire faced inherent challenges that eventually led to its decline. Succession disputes, weak leadership, and external pressures from European",
                "Throughout human history, the development of writing has been a transformative journey, shaping societies, cultures, and communication as we know it today. Dating back to ancient civilizations, the evolution of writing reflects humanity's quest for expression, knowledge preservation, and communication across time and space. The earliest forms of writing emerged around 3500 BCE in Mesopotamia, with the invention of cuneiform script by the Sumerians. Initially used for record-keeping and administrative purposes, cuneiform consisted of wedge-shaped characters impressed onto clay tablets. This breakthrough marked the dawn of written language, enabling complex ideas to be recorded and transmitted beyond oral tradition. Parallel to the development of cuneiform, ancient Egyptian hieroglyphs emerged around the same period, depicting objects, animals, and abstract concepts. Hieroglyphic inscriptions adorned tombs, temples, and monuments, serving religious, bureaucratic, and monumental purposes. The decipherment of hieroglyphs in the 19th century unlocked insights into ancient Egyptian history, culture, and literature. In ancient China, the invention of the oracle bone script during the Shang dynasty (c. 1600–1046 BCE) marked a significant milestone in writing's evolution. Carved onto animal bones and turtle shells, oracle bone inscriptions recorded divinations, royal decrees, and historical events. Over time, these pictographic symbols evolved into the Chinese script, a complex system of characters representing syllables, concepts, and ideas. The development of alphabetic writing systems represented a leap forward in linguistic abstraction and simplification. The Phoenician alphabet, originating around 1050 BCE, consisted of 22 consonantal letters, providing a more flexible and efficient means of communication. The Phoenician script served as the ancestor of numerous alphabets, including Greek, Latin, and Cyrillic, which form the basis of many modern writing systems. The spread of writing systems facilitated cultural exchange, trade, and intellectual advancement across ancient civilizations. In ancient Greece, the rise of literacy fostered philosophical inquiry, scientific exploration, and democratic governance. The works of Homer, Plato, and Aristotle, recorded in the Greek alphabet, laid the foundation for Western literature, philosophy, and rhetoric. During the Roman Empire, the Latin alphabet became the dominant script across Europe, North Africa, and the Middle East, facilitating communication and administrative governance. The proliferation of Latin literature, epitomized by the works of Virgil, Cicero, and Seneca, exerted a profound influence on Western thought, language, and culture. In the Middle Ages, the preservation and transmission of knowledge relied on manuscript culture, as scribes painstakingly copied and illuminated texts by hand. Monastic scriptoria served as centers of literary production, where monks meticulously transcribed religious, philosophical, and scientific works. The illuminated manuscripts of the medieval period, adorned with intricate illustrations and decorative motifs, epitomized the fusion of artistry and scholarship. The invention of the printing press by Johannes Gutenberg in the 15th century revolutionized the dissemination of knowledge, making books more accessible and affordable. The printing press facilitated the spread of the Renaissance, Reformation, and Enlightenment movements, ushering in an era of scientific inquiry, religious reform, and cultural transformation. In the modern era, the advent of digital technology has further revolutionized writing and communication. The rise of the internet, word processing software, and social media platforms has democratized publishing, enabling individuals to share ideas and information instantaneously on a global scale. Despite these technological advancements, writing remains an essential skill, enabling humans to express thoughts, emotions, and experiences in tangible form. Whether inscribed on ancient tablets, printed in books, or posted online, the written word continues to shape human history, culture, and identity, bridging the past, present, and future. The evolution of writing reflects not only technological progress but also cultural, social, and political dynamics. Writing has been instrumental in the rise and fall of civilizations, the dissemination of religious beliefs, the assertion of political power, and the preservation of collective memory. In ancient Mesopotamia, the invention of writing coincided with the emergence of complex urban societies and centralized states. Cuneiform inscriptions documented laws, treaties, and royal decrees, establishing the foundation for governance and legal administration. The Epic of Gilgamesh, engraved on clay tablets, immortalized Mesopotamian myths and legends, providing insights into ancient beliefs and values. Similarly, in ancient Egypt, hieroglyphic inscriptions served as a vehicle for religious rituals, funerary practices, and royal propaganda. The construction of monumental structures such as the pyramids and temples was accompanied by hieroglyphic inscriptions glorifying pharaohs and commemorating their achievements. The decipherment of hieroglyphs unveiled the rich tapestry of Egyptian civilization, from its religious beliefs to its artistic achievements. In ancient China, the development of writing paralleled the centralization of political power and the establishment of imperial rule. The standardization of the Chinese script during the Qin dynasty (221–206 BCE) facilitated communication and administrative governance across a vast and diverse empire. Chinese calligraphy, revered as a high art form, epitomized the elegance and sophistication of the written word in Chinese culture. During the Islamic Golden Age, the Arabic script emerged as a unifying force, transcending linguistic and ethnic boundaries across the Islamic world. Arabic calligraphy adorned mosques, palaces, and manuscripts, reflecting the aesthetic beauty",
                "The British colonization of America represents a multifaceted and transformative chapter in world history, spanning from the late 16th century to the late 18th century. The journey began with England's initial forays into North America, marked by Sir Walter Raleigh's unsuccessful attempts to establish settlements in present-day North Carolina in the 1580s. The successful colonization efforts gained momentum with the founding of Jamestown, Virginia in 1607, under the sponsorship of the Virginia Company. This settlement, despite initial hardships, laid the foundation for England's sustained presence in the New World. In 1620, the Pilgrims aboard the Mayflower established Plymouth Colony, seeking religious freedom and becoming one of the first English colonies in New England. Throughout the 17th century, additional English colonies were established along the Atlantic coast, including Massachusetts Bay Colony (1630), Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. The British colonization of America represents a multifaceted and transformative chapter in world history, spanning from the late 16th century to the late 18th century. The journey began with England's initial forays into North America, marked by Sir Walter Raleigh's unsuccessful attempts to establish settlements in present-day North Carolina in the 1580s. The successful colonization efforts gained momentum with the founding of Jamestown, Virginia in 1607, under the sponsorship of the Virginia Company. This settlement, despite initial hardships, laid the foundation for England's sustained presence in the New World. In 1620, the Pilgrims aboard the Mayflower established Plymouth Colony, seeking religious freedom and becoming one of the first English colonies in New England. Throughout the 17th century, additional English colonies were established along the Atlantic coast, including Massachusetts Bay Colony (1630), Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying ",
                "Norman Conquest of England, culminating in 1066 with the Battle of Hastings, stands as a pivotal event in English history that reshaped the political, social, and cultural landscape of the island. The catalyst for this conquest was the death of Edward the Confessor in January 1066, sparking a succession crisis that ultimately led to three claimants vying for the English throne: Harold Godwinson, Tostig Godwinson (Harold's brother), and Duke William II of Normandy. Harold Godwinson, the Anglo-Saxon Earl of Wessex, was crowned king in January 1066 but faced immediate challenges from rival claimants. Tostig sought support from King Harald Hardrada of Norway, resulting in the invasion of northern England in September 1066. Meanwhile, Duke William of Normandy prepared his own invasion across the English Channel, backed by papal sanction and a claim of Edward the Confessor's alleged promise of succession. On October 14, 1066, the Norman forces clashed with the Anglo-Saxon army led by Harold Godwinson at the Battle of Hastings, where Harold was killed, marking a decisive victory for Duke William. William's coronation as King of England on Christmas Day solidified Norman rule over England. In the aftermath of the conquest, William implemented significant reforms, including the compilation of the Domesday Book in 1086, a comprehensive survey of landholdings and resources, which facilitated effective governance and taxation. The Norman Conquest ushered in a period of Norman feudalism, centralized monarchy, and cultural assimilation, as Norman French became the language of the court and aristocracy. The conquest also led to the widespread redistribution of land, with Anglo-Saxon nobles dispossessed and Norman nobility granted vast estates. The impact of the Norman Conquest extended beyond England, influencing architecture, law, literature, and language. Romanesque and Gothic architectural styles transformed England's landscape, exemplified by the construction of cathedrals like Canterbury and Durham. The legacy of the Norman Conquest is enduring, shaping the development of English identity and institutions and contributing to the emergence Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. Norman Conquest of England, culminating in 1066 with the Battle of Hastings, stands as a pivotal event in English history that reshaped the political, social, and cultural landscape of the island. The catalyst for this conquest was the death of Edward the Confessor in January 1066, sparking a succession crisis that ultimately led to three claimants vying for the English throne: Harold Godwinson, Tostig Godwinson (Harold's brother), and Duke William II of Normandy. Harold Godwinson, the Anglo-Saxon Earl of Wessex, was crowned king in January 1066 but faced immediate challenges from rival claimants. Tostig sought support from King Harald Hardrada of Norway, resulting in the invasion of northern England in September 1066. Meanwhile, Duke William of Normandy prepared his own invasion across the English Channel, backed by papal sanction and a claim of Edward the Confessor's alleged promise of succession. On October 14, 1066, the Norman forces clashed with the Anglo-Saxon army led by Harold Godwinson at the Battle of Hastings, where Harold was killed, marking a decisive victory for Duke William. William's coronation as King of England on Christmas Day solidified Norman rule over England. In the aftermath of the conquest, William implemented significant reforms, including the compilation of the Domesday Book in 1086, a comprehensive survey of landholdings and resources, which facilitated effective governance and taxation. The Norman Conquest ushered in a period of Norman feudalism, centralized monarchy, and cultural assimilation, as Norman French became the language of the court and aristocracy. The conquest also led to the widespread redistribution of land, with Anglo-Saxon nobles dispossessed and Norman nobility granted vast estates. The impact of the Norman Conquest extended beyond England, influencing architecture, law, literature, and language. Romanesque and Gothic architectural styles transformed England's landscape, exemplified by the construction of cathedrals like Canterbury and Durham. The legacy of the Norman Conquest is enduring, shaping the development of English identity and institutions and contributing to the emergence Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The .",
                "Vikings, originating from Scandinavia in the late 8th century, were seafaring Norse warriors and traders who profoundly influenced European history during the Viking Age (c. 790-1066 CE). The Viking expansion began with raids on coastal regions of Britain, Ireland, and Francia around 793 CE, marked by the devastating sack of the monastery at Lindisfarne. These raids were facilitated by the Vikings' advanced maritime technology, particularly their longships, which allowed them to navigate rivers and oceans swiftly, reaching far-off lands. By the late 9th century, Viking influence extended eastward into Russia, where they established the Volga Trade Route connecting the Baltic Sea with the Byzantine Empire, engaging in lucrative trade and establishing settlements such as Novgorod and Kiev. In 911 CE, Viking leader Rollo was granted the Duchy of Normandy by Frankish King Charles the Simple, paving the way for Viking settlement in France and the subsequent Norman conquest of England in 1066. Viking exploration continued with the discovery of Iceland in 874 CE by Ingólfr Arnarson and Greenland around 982 CE by Erik the Red, who established the first Norse settlement in the New World. Leif Erikson, son of Erik the Red, is credited with leading the Norse discovery of North America around 1000 CE, predating Christopher Columbus by nearly 500 years. The Viking Age drew to a close with the defeat of the Great Heathen Army by Alfred the Great in England and the Christianization of Scandinavia, marking the assimilation of Norse societies into medieval European kingdoms. Beyond their reputation as raiders, the Vikings were also skilled traders who established extensive trade networks, facilitating cultural exchange and economic development. Their influence is evident in the Norse-derived place names, language, and legal customs that persist in regions of Europe, especially in areas of Viking settlement such as the Danelaw in England and the Normandy region of France. Today, the legacy of the Vikings endures in Scandinavian heritage, folklore, and shared cultural influences across nations impacted by their explorations and Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. Vikings, originating from Scandinavia in the late 8th century, were seafaring Norse warriors and traders who profoundly influenced European history during the Viking Age (c. 790-1066 CE). The Viking expansion began with raids on coastal regions of Britain, Ireland, and Francia around 793 CE, marked by the devastating sack of the monastery at Lindisfarne. These raids were facilitated by the Vikings' advanced maritime technology, particularly their longships, which allowed them to navigate rivers and oceans swiftly, reaching far-off lands. By the late 9th century, Viking influence extended eastward into Russia, where they established the Volga Trade Route connecting the Baltic Sea with the Byzantine Empire, engaging in lucrative trade and establishing settlements such as Novgorod and Kiev. In 911 CE, Viking leader Rollo was granted the Duchy of Normandy by Frankish King Charles the Simple, paving the way for Viking settlement in France and the subsequent Norman conquest of England in 1066. Viking exploration continued with the discovery of Iceland in 874 CE by Ingólfr Arnarson and Greenland around 982 CE by Erik the Red, who established the first Norse settlement in the New World. Leif Erikson, son of Erik the Red, is credited with leading the Norse discovery of North America around 1000 CE, predating Christopher Columbus by nearly 500 years. The Viking Age drew to a close with the defeat of the Great Heathen Army by Alfred the Great in England and the Christianization of Scandinavia, marking the assimilation of Norse societies into medieval European kingdoms. Beyond their reputation as raiders, the Vikings were also skilled traders who established extensive trade networks, facilitating cultural exchange and economic development. Their influence is evident in the Norse-derived place names, language, and legal customs that persist in regions of Europe, especially in areas of Viking settlement such as the Danelaw in England and the Normandy region of France. Today, the legacy of the Vikings endures in Scandinavian heritage, folklore, and shared cultural influences across nations impacted by their explorations and Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France.  ",
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