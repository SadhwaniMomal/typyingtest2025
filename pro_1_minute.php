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
    <title>TypingTwist.com - One_Minute_Pro</title>
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
    margin-top: 2.1rem;
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
                        <span id="time">1:00</span>
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
                "In the year 2024, amidst the hustle and bustle of [New York City's] (population: 8,336,817) vibrant streets, where skyscrapers ([including the iconic Empire State Building](height: 1,454 feet)) pierced the heavens and taxis (yellow: 13,587, green: 6,521) weaved through the maze of traffic, a young entrepreneur, fueled by ambition and determination, embarked on a [quest to revolutionize the tech industry](mission: disrupt conventional norms) (funding raised: $10,000,000). Armed with [cutting-edge AI algorithms](technology: neural networks) and a team of [brilliant minds] (engineers: 25, data scientists: 15), they set out to [create innovative solutions](products launched: 3) that would [transform the way people interact](users impacted: 1,000,000). As deadlines loomed ([launch date: 05/20/2024]), the pressure mounted, but [they persevered](hours worked: 80/week) ([coffee consumed: gallons]). Amidst the chaos, amidst the uncertainty, amidst the [endless stream of emails](unread messages: 10,000+), they pressed forward, driven by a vision of [a brighter future](success metrics: impact, scalability, sustainability). And as the city [slept](average bedtime: 02:00 AM), they toiled away, [laying the foundation](code lines written: 100,000+) for [what would soon become](projected revenue: $100,000,000) [a global phenomenon](worldwide reach: 50+ countries). In the sprawling metropolis of Tokyo, where neon lights (count: 4,000+) illuminated the night sky and bullet trains (speed: 320 km/h) raced across the urban landscape, a group of [visionaries](team members: 50) embarked on a [bold mission](goal: redefine transportation). Armed with [cutting-edge technology](quantum computing), they sought to [revolutionize the way people traveled](impact: global). Through [collaboration](partnerships: 20+), [innovation](patents filed: 50), and [sheer determination](hours worked: 100/week), they [pushed the boundaries](limits: none) of what was possible. As deadlines loomed ([launch date: 06/30/2024]), they [worked tirelessly](caffeine consumed: liters) ([pizza consumed: boxes]) to [bring their vision to life](success criteria: user satisfaction (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "heart of London, where the River Thames (length: 215 miles) flowed majestically through the city, and double-decker buses (fleet size: 9,000) traversed the labyrinthine streets, a team of [trailblazers](members: 75) embarked on a [mission to redefine finance](goal: democratize access). With [blockchain technology](transactions per second: 10,000) as their weapon of choice, they set out to [disrupt the status quo](impact: global). Through [strategic alliances](partnerships: 30+), [user-centric design](UX iterations: 100+), and [rigorous testing](bugs fixed: 10,000+), they [forged ahead](progress: unstoppable). Amidst the chaos of [market fluctuations](volatility: high), [regulatory hurdles](compliance checks: rigorous), and [competitive pressures](competitors: formidable), they remained [undaunted](resolve: unwavering). And as the [launch date](anticipated: 07/15/2024) approached, they [prepared to unleash](anticipated adoption: exponential) [their creation](projected valuation: billions). In the vibrant city of Paris, where the Eiffel Tower (height: 1,083 feet) loomed over the skyline and sidewalk cafes (count: 5,000+) buzzed with conversation, a team of [innovators](team size: 100) embarked on a [quest for sustainability](mission: combat climate change). Armed with [renewable energy solutions](technology: solar, wind, hydro), they set out to [transform the way we power our world](impact: monumental). Through [collaborative research](partnerships: 50+), [community engagement](workshops held: 100), and [policy advocacy](legislation influenced: 5+), they [charted a course](vision: green future). Amidst the challenges of [resource constraints](funding secured: $50,000,000), [technological hurdles](innovation breakthroughs: 10+), and [political resistance](lobbying efforts: relentless), they persevered. And as the [world watched](media coverage: global), they [prepared to unveil](anticipated impact: transformative) [their masterpiece](legacy: everlasting). (data analyzed: terabytes), they remained [steadfast](goal: achievable). And as the world [watched in anticipation](media coverage: global), (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "sprawling cityscape of Shanghai, where skyscrapers (height: 492 feet on average) pierced the clouds and millions of bicycles (count: 9 million) weaved through the bustling streets, a team of [visionaries](team members: 150) embarked on a [mission to redefine urban mobility](goal: sustainable transportation). Armed with [smart city technology](IoT devices: 1 million+), they sought to [revolutionize the way people moved](impact: city-wide). Through [data analytics](data processed: petabytes), [public-private partnerships](collaborations: 20+), and [citizen engagement](community events: 100+), they [pioneered a new era](vision: greener tomorrow). Amidst the chaos of [construction projects](milestones achieved: 500+), [traffic congestion](average commute time: 1.5 hours), and [environmental challenges](air pollution levels: improving), they [pressed forward](mantra: progress over perfection). And as the [deadline neared](completion date: 09/01/2024), they [prepared to unveil](anticipated impact: transformative) [their legacy](legacy: sustainable city model). In the dynamic cityscape of Seoul, where the Han River (length: 319.7 kilometers) flowed gracefully and street vendors (count: 30,000+) filled the air with the aroma of sizzling delicacies, a team of [trailblazers](team members: 200) embarked on a [mission to revolutionize healthcare](goal: accessible medical services). Armed with [cutting-edge technology](AI diagnostics), they aimed to [bridge the gap](impact: nationwide) between patients and providers. Through [data-driven insights](analytics: terabytes processed), [cross-disciplinary collaboration](partnerships: 50+), and [community outreach](health campaigns: 100+), they [fostered a healthier future](vision: healthier society). Amidst the challenges of [regulatory compliance](certifications obtained: 10+), [technological integration](systems connected: 1,000+), and [public skepticism](trust-building efforts: ongoing), they [remained steadfast](belief: healthcare for all). And as the [launch date](anticipated: 10/01/2024) approached, they [readied themselves](preparations: meticulous) to [usher in a new era](anticipated impact: life-saving) [of healthcare](legacy: healthier nation). (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "pulsating cityscape of Mumbai, where the Arabian Sea (area: 14,500 square kilometers) met the shores and the iconic local trains (daily passengers: 7.5 million) formed the lifeline of the city, a team of [innovators](team size: 250) embarked on a [mission to empower small businesses](goal: economic inclusivity). Armed with [digital solutions](platforms developed: 5), they aimed to [level the playing field](impact: local economies). Through [grassroots partnerships](collaborations: 100+), [user-centric design](feedback loops: continuous), and [capacity-building workshops](events hosted: 200+), they [fostered entrepreneurship](vision: prosperity for all). Amidst the challenges of [infrastructural limitations](power outages: frequent), [bureaucratic hurdles](licenses obtained: 20+), and [economic downturns](market volatility: high), they [remained undeterred](resolve: unshakable). And as the [launch date](anticipated: 11/15/2024) drew closer, they [prepared to unleash](anticipated impact: transformative) [a wave of change](legacy: economic empowerment) [across the city](vision: thriving communities). vibrant mosaic of São Paulo, where skyscrapers (count: 600+) stretched towards the heavens and the pulse of samba music filled the air, a team of [visionaries](team size: 300) embarked on a [mission to revolutionize education](goal: accessible learning). Armed with [digital platforms](apps developed: 3) and [pedagogical innovation](methods implemented: 10+), they aimed to [empower learners](impact: nationwide). Through [teacher training programs](workshops conducted: 50+), [community partnerships](collaborations: 200+), and [curriculum development](subjects covered: diverse), they [nurtured a culture of learning](vision: knowledge for all). Amidst the challenges of [resource constraints](funding secured: $20,000,000), [technological barriers](connectivity issues: addressed), and [socioeconomic disparities](access provided: equitable), they [persevered with passion](motto: education transforms). And as the [inaugural class](anticipated: 12/01/2024) awaited, they [stood on the cusp](anticipation: palpable) of [a new era](impact: generational) [in education](legacy: empowered minds). (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "mosaic of Mexico City, where ancient pyramids (sites: 5+) stood juxtaposed with modern skyscrapers, and the vibrant colors of street art adorned every corner, a team of [trailblazers](team size: 400) embarked on a [mission to empower artisans](goal: economic sustainability). Armed with [e-commerce platforms](sites launched: 2) and [cultural preservation](initiatives undertaken: 10+), they aimed to [preserve heritage](impact: global). Through [artisan cooperatives](partnerships: 100+), [digital marketing](campaigns launched: 20+), and [fair trade practices](standards upheld: rigorous), they [celebrated craftsmanship](vision: tradition meets modernity). Amidst the challenges of [logistical hurdles](supply chain optimized: 50+), [market competition](global marketplace: fierce), and [cultural commodification](authenticity maintained: paramount), they [stood resolute](motto: artisanal pride). And as the [virtual marketplace](anticipated launch: 01/15/2025) prepared to open its digital doors, they [embraced the opportunity](anticipation: electric) to [showcase Mexico's rich heritage](legacy: preserved traditions) [to the world](vision: cultural exchange). panorama of Buenos Aires, where tango rhythms echoed through the cobblestone streets and the aroma of grilled meats lingered in the air, a team of [visionaries](team size: 500) embarked on a [mission to empower grassroots initiatives](goal: community resilience). Armed with [digital platforms](apps developed: 3) and [sustainable practices](initiatives implemented: 10+), they aimed to [foster social cohesion](impact: neighborhood-wide). Through [community workshops](events organized: 100+), [microfinance programs](funds disbursed: $1,000,000+), and [civic engagement campaigns](volunteers mobilized: 500+), they [nurtured a sense of belonging](vision: unity in diversity). Amidst the challenges of [economic instability](currency fluctuations: volatile), [political uncertainty](government transitions: frequent), and [social inequality](gaps addressed: progressively), they [remained steadfast](resolve: unyielding). And as the [inaugural project](anticipated launch: 02/28/2025) drew near, they [embraced the opportunity](anticipation: palpable) to [spark grassroots change](legacy: empowered communities) [across the city](vision: collective empowerment). (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "Rio de Janeiro, where the rhythm of samba permeated the streets and the majestic Christ the Redeemer statue watched over the city, a team of [innovators](team size: 600) embarked on a [mission to harness renewable energy](goal: sustainability). Armed with [cutting-edge technology](solar panels: installed 10,000+) and [environmental stewardship](initiatives launched: 20+), they aimed to [preserve the natural beauty](impact: ecosystem preservation) of their beloved city. Through [community outreach](workshops conducted: 100+), [government partnerships](collaborations: 50+), and [public education campaigns](awareness events: 200+), they [championed a greener future](vision: eco-conscious Rio). Amidst the challenges of [urban sprawl](green spaces preserved: 100 hectares), [rising sea levels](coastline protection: fortified), and [deforestation](tree planting initiatives: 50,000+), they [remained undeterred](resolve: unwavering). And as the [inaugural solar grid](anticipated launch: 03/31/2025) neared completion, they [stood poised](anticipation: palpable) to [usher in a new era](legacy: sustainable legacy) [of environmental responsibility](vision: Rio as a model city) for generations to come. Pacific Ocean kissed the shores, a team of [visionaries](team size: 700) embarked on a [mission to tackle homelessness](goal: housing for all). Armed with [innovative solutions](housing units built: 1,000+) and [compassionate outreach](programs implemented: 30+), they aimed to [bring hope to the streets](impact: city-wide). Through [collaborations with nonprofits](partnerships: 50+), [citywide initiatives](events organized: 100+), and [community-led efforts](volunteers mobilized: 1,000+), they [worked tirelessly](hours dedicated: countless) to [address the root causes](vision: holistic approach) of homelessness. Amidst the challenges of [limited resources](funding secured: $50,000,000+), [NIMBYism](community resistance: addressed), and [policy constraints](advocacy efforts: ongoing), they [remained steadfast](resolve: unyielding). And as the [inaugural supportive housing complex](anticipated completion: 04/30/2025) neared its opening, they [embraced the opportunity](anticipation: electric) to [create a more equitable](legacy: compassionate city) [and inclusive society](vision: housing as a human right) for all Angelenos. (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "Red Fort stood as a testament to history and the chaotic symphony of rickshaws and honking horns filled the streets, a team of [trailblazers](team size: 800) embarked on a [mission to address air pollution](goal: clean air for all). Armed with [cutting-edge technology](air quality monitors: deployed 5,000+) and [sustainable policies](initiatives implemented: 50+), they aimed to [breathe new life](impact: city-wide) into the lungs of the capital. Through [public awareness campaigns](events organized: 200+), [tree planting drives](saplings planted: 1,000,000+), and [collaborations with industry](partnerships: 100+), they [fought tirelessly](hours dedicated: countless) against the smog-filled skies. Amidst the challenges of [vehicular emissions](regulations enforced: stringent), [industrial pollution](emission standards: enforced), and [crop burning](alternatives promoted: sustainable), they [remained undeterred](resolve: unwavering). And as the [inaugural clean air zone](anticipated launch: 05/30/2025) approached, they [stood ready](anticipation: palpable) to [usher in a new era](legacy: sustainable city) [of environmental stewardship](vision: Delhi as a green capital) for generations to come.  Istanbul, where the Bosphorus Strait bridged two continents and the calls to prayer echoed from minarets, a team of [innovators](team size: 900) embarked on a [mission to promote cultural exchange](goal: global understanding). Armed with [digital platforms](apps developed: 3) and [intercultural dialogue](initiatives launched: 50+), they aimed to [celebrate diversity](impact: worldwide). Through [art exhibitions](events organized: 100+), [cultural festivals](festivals hosted: 20+), and [educational programs](workshops conducted: 200+), they [fostered connections](vision: unity in diversity) across borders. Amidst the challenges of [political tensions](diplomatic hurdles: navigated), [linguistic barriers](translation services: provided), and [cultural misunderstandings](dialogue facilitated: open), they [persevered with passion](resolve: unyielding). And as the [inaugural cultural exchange summit](anticipated launch: 06/30/2025) drew near, they [embraced the opportunity](anticipation: electric) to [bridge divides](legacy: global harmony) [and build bridges](vision: Istanbul as a cultural capital) [between nations](impact: lasting). (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "River flowed gracefully, a team of [visionaries](team size: 1000) embarked on a [mission to promote sustainable agriculture](goal: food security). Armed with [innovative farming techniques](hydroponics systems: installed 1000+), they aimed to [nourish communities](impact: nationwide) while preserving precious resources. Through [community-led initiatives](workshops conducted: 200+), [research partnerships](collaborations: 50+), and [government support](policies influenced: 10+), they [cultivated a new paradigm](vision: green revolution) of farming. Amidst the challenges of [water scarcity](irrigation systems optimized: efficient), [land degradation](soil restoration efforts: ongoing), and [crop diseases](prevention strategies: implemented), they [remained steadfast](resolve: unyielding). And as the [inaugural harvest](anticipated yield: 07/31/2025) approached, they [stood on the brink](anticipation: palpable) of [transforming the agricultural landscape](legacy: sustainable food systems) [of Egypt](vision: feeding the nation) for generations to come. where the savannah met the cityscape and the rhythm of life pulsed through the streets, a team of [trailblazers](team size: 1200) embarked on a [mission to empower women](goal: gender equality). Armed with [educational programs](workshops conducted: 300+), [economic initiatives](entrepreneurship training: 50+), and [advocacy campaigns](events organized: 100+), they aimed to [break down barriers](impact: societal) and [build a more inclusive future](vision: equal opportunities). Through [partnerships with NGOs](collaborations: 70+), [government engagement](policies influenced: 15+), and [grassroots movements](community mobilization: widespread), they [fought tirelessly](hours dedicated: countless) against gender-based discrimination. Amidst the challenges of [cultural norms](attitudes shifted: gradually), [legal barriers](laws amended: progressive), and [economic disparities](opportunities expanded: equitable), they [remained resolute](resolve: unwavering). And as the [inaugural women's empowerment summit](anticipated launch: 08/31/2025) drew near, they [stood poised](anticipation: electric) to [forge a path](legacy: empowered generations) [towards equality](vision: Nairobi as a beacon) for all. (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "Jakarta, where the vibrant chaos of street vendors and bustling traffic met the serene beauty of ancient temples, a team of [innovators](team size: 1500) embarked on a [mission to combat plastic pollution](goal: environmental sustainability). Armed with [recycling initiatives](programs launched: 100+), [public awareness campaigns](events organized: 200+), and [policy advocacy](legislation influenced: 10+), they aimed to [preserve Indonesia's natural beauty](impact: nationwide). Through [community clean-up drives](volunteers mobilized: 50,000+), [corporate partnerships](collaborations: 30+), and [technological solutions](waste management systems: implemented 500+), they [worked tirelessly](hours dedicated: countless) to [tackle the plastic crisis](vision: plastic-free future). Amidst the challenges of [waste management](infrastructure improved: ongoing), [consumer behavior](mindsets shifted: gradually), and [political inertia](lobbying efforts: relentless), they [remained undeterred](resolve: unyielding). And as the [inaugural plastic-free initiative](anticipated launch: 09/30/2025) approached, they [stood ready](anticipation: palpable) to [lead the charge](legacy: environmental stewardship) [towards a greener future](vision: Jakarta as a sustainable city) for generations to come. Mumbai, where the fusion of cultures and the hustle of daily life created a unique tapestry, a team of [change-makers](team size: 2000) embarked on a [mission to address urban poverty](goal: socio-economic empowerment). Armed with [inclusive policies](initiatives launched: 50+), [skills training programs](workshops conducted: 300+), and [community development projects](implemented: 100+), they aimed to [create pathways out of poverty](impact: city-wide). Through [grassroots mobilization](volunteers engaged: 10,000+), [public-private partnerships](collaborations: 100+), and [holistic support services](provided: 1000s), they [worked tirelessly](hours dedicated: countless) to [uplift marginalized communities](vision: inclusive Mumbai). Amidst the challenges of [inequality](opportunities expanded: equitable), [access to basic amenities](infrastructure improved: ongoing), and [social stigma](attitudes shifted: gradually), they [remained unwavering](resolve: unyielding). And as the [inaugural socio-economic empowerment initiative](anticipated launch: 10/31/2025) drew near, they [stood on the precipice](anticipation: palpable) of [transforming lives](legacy: empowered futures) [and reshaping the city's narrative](vision: Mumbai as a beacon of hope) for generations to come. (vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "São Paulo, where the pulse of Brazil's cultural heartbeat reverberated through every street corner and the skyline reached for the clouds, a team of [visionaries](team size: 2500) embarked on a [mission to combat homelessness](goal: housing for all). Armed with [innovative housing solutions](projects launched: 100+), [community outreach programs](initiatives implemented: 200+), and [social support services](provided: 1000s), they aimed to [restore dignity](impact: city-wide) and [provide stability](vision: inclusive São Paulo) for the city's most vulnerable populations. Through [partnerships with NGOs](collaborations: 50+), [government collaboration](policies influenced: 10+), and [corporate sponsorship](funds raised: $100,000,000+), they [championed the cause](hours dedicated: countless) of those without a home. Amidst the challenges of [urbanization](housing shortages addressed: ongoing), [economic disparities](access to resources improved: progressively), and [social stigma](perceptions changed: gradually), they [remained steadfast](resolve: unwavering) in their commitment to [building a brighter future](legacy: empowered communities) [for all São Paulistanos](vision: São Paulo as a model city) to thrive in. And as the [inaugural housing project](anticipated launch: 11/30/2025) approached, they [stood poised](anticipation: palpable) to [usher in a new era](impact: transformative) [of social justice](vision: housing as a human right) and [equality](legacy: inclusive society) for generations to come. a team of [trailblazers](team size: 3000) embarked on a [mission to revolutionize education](goal: access for all). Armed with [digital learning platforms](apps developed: 5+), [teacher training programs](workshops conducted: 500+), and [community engagement initiatives](events organized: 1000+), they aimed to [empower the next generation](impact: nationwide) with knowledge and opportunity. Through [partnerships with local schools](collaborations: 200+), [government support](policies influenced: 20+), and [corporate sponsorships](funds raised: $50,000,000+), they [fostered a culture of learning](vision: educated Nigeria). Amidst the challenges of [infrastructure limitations](digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of",
                "Delhi, where the past seamlessly intertwined with the present and the streets teemed with life, a team of [visionaries](team size: 4000) embarked on a [mission to combat air pollution](goal: cleaner environment). Armed with [green technologies](innovations implemented: 100+), [public awareness campaigns](initiatives launched: 500+), and [policy advocacy](influenced regulations: 50+), they aimed to [reclaim the city's air](impact: city-wide) and ensure a healthier future for its residents. Through [community mobilization](volunteers engaged: 50,000+), [scientific research](studies conducted: 1000+), and [strategic partnerships](collaborations: 100+), they [fought tirelessly](hours dedicated: countless) against the smog that shrouded the capital. Amidst the challenges of [industrial emissions](regulations enforced: stringent), [vehicular pollution](public transportation enhanced: sustainable), and [crop burning](alternatives promoted: sustainable), they [remained undeterred](resolve: unwavering). And as the [inaugural clean air initiative](anticipated launch: 01/31/2026) drew near, they [stood poised](anticipation: palpable) to [usher in a new era](impact: transformative) of [environmental stewardship](vision: Delhi as a green capital) and [public health](legacy: healthier population) for generations to come. Cairo, where ancient history met modernity and the Nile River flowed as a lifeline through the city, a team of [change-makers](team size: 5000) embarked on a [mission to revitalize urban spaces](goal: community rejuvenation). Armed with [creative placemaking](projects implemented: 200+), [sustainable development](initiatives launched: 500+), and [cultural preservation](heritage sites restored: 50+), they aimed to [breathe new life](impact: city-wide) into Cairo's neighborhoods. Through [citizen engagement](community events: 1000+), [government collaboration](policies influenced: 20+), and [public-private partnerships](collaborations: 100+), they [transformed neglected areas](vision: vibrant Cairo) into thriving hubs of activity. Amidst the challenges of [urban decay](infrastructure revitalized: ongoing), [economic disparities](opportunities created: equitably), and [cultural erosion](heritage protected: diligently), they [remained steadfast](resolve: unyielding) in their commitment to [preserving the soul](legacy: cultural capital) and [enhancing the livability](vision: Cairo for all) of the city. And as the [inaugural community revitalization project](anticipated launch: 02/28/2026) approached, they [stood ready](anticipation: palpable) to [celebrate Cairo's heritage](impact: transformative) and [build a brighter future](legacy: thriving communities) [for all its residents](vision: inclusive city).  Jakarta, where the fusion of tradition and modernity created a vibrant tapestry of life, a team of [visionaries](team size: 6000) embarked on a [mission to promote sustainable urban development](goal: city resilience). Armed with [innovative urban planning](projects implemented: 300+), [green infrastructure](initiatives launched: 500+), and [community engagement](events organized: 1000+), they aimed to [create a city that thrived in harmony with nature](impact: city-wide). Through [stakeholder collaboration](partnerships: 100+), [government advocacy](policies influenced: 50+), and [citizen empowerment](workshops conducted: 2000+), they [worked tirelessly](hours dedicated: countless) to [shape Jakarta's future](vision: sustainable metropolis). Amidst the challenges of [urban sprawl](smart growth strategies: implemented), [climate change](resilience measures: fortified), and [inequality](inclusive development: prioritized), they [remained resolute](resolve: unwavering) in their commitment to [building a better tomorrow](legacy: sustainable city) [for all Jakartans](vision: inclusive Jakarta). And as the [inaugural sustainable city initiative](anticipated launch: 03/31/2026) drew near, they [stood ready](anticipation: palpable) to [pioneer a new model](impact: transformative) [of urban living](legacy: resilient community) [for the world to emulate](vision: Jakarta as a global leader).",
                "Manila, where the energy of its people matched the vibrancy of its streets, a team of [innovators](team size: 7000) embarked on a [mission to tackle urban congestion](goal: sustainable mobility). Armed with [smart transportation solutions](projects implemented: 400+), [public transit upgrades](initiatives launched: 600+), and [alternative mobility options](services introduced: 1000+), they aimed to [improve the quality of life](impact: city-wide) for millions of commuters. Through [public-private partnerships](collaborations: 200+), [community engagement](events organized: 1500+), and [technology integration](innovations adopted: 1000+), they [worked tirelessly](hours dedicated: countless) to [ease the burden of commuting](vision: accessible Manila). Amidst the challenges of [traffic congestion](congestion reduced: gradually), [pollution](emissions curbed: steadily), and [urban sprawl](sustainable development: prioritized), they [remained steadfast](resolve: unyielding) in their commitment to [building a more livable city](legacy: sustainable urbanization). And as the [inaugural sustainable mobility project](anticipated launch: 04/30/2026) drew near, they [stood ready](anticipation: palpable) to [usher in a new era](impact: transformative) of [urban transportation](vision: Manila as a model city) [for the 21st century](legacy: sustainable mobility). Bangkok, where the fusion of tradition and modernity created a dynamic cultural landscape, a team of [trailblazers](team size: 8000) embarked on a [mission to promote environmental sustainability](goal: eco-friendly city). Armed with [green initiatives](projects implemented: 500+), [renewable energy solutions](initiatives launched: 700+), and [waste management strategies](programs introduced: 1000+), they aimed to [preserve the city's natural beauty](impact: city-wide) for future generations. Through [community engagement](events organized: 2000+), [government collaboration](policies influenced: 100+), and [corporate partnerships](collaborations: 300+), they [worked tirelessly](hours dedicated: countless) to [protect Bangkok's ecosystem](vision: sustainable metropolis). Amidst the challenges of [urbanization](green spaces preserved: progressively), [pollution](emissions reduced: steadily), and [climate change](resilience measures: fortified), they [remained resolute](resolve: unwavering) in their commitment to [building a greener tomorrow](legacy: eco-friendly city) [for all Bangkokians](vision: inclusive Bangkok). And as the [inaugural sustainability initiative](anticipated launch: 05/31/2026) drew near, they [stood ready](anticipation: palpable) to [pioneer a new paradigm](impact: transformative) [of urban development](legacy: sustainable urbanization) [that prioritizes harmony](vision: Bangkok as an environmental leader) [with the natural world](legacy: thriving ecosystem).  Istanbul, where the East meets the West and ancient history intertwines with modernity, a team of [innovators](team size: 10,000) embarked on a [mission to foster cultural exchange](goal: global understanding). Armed with [digital platforms](apps developed: 10+), [cultural festivals](initiatives organized: 100+), and [educational programs](workshops conducted: 1000+), they aimed to [celebrate diversity](impact: worldwide) and [bridge cultural divides](vision: interconnected world). Through [intercultural dialogue](conversations facilitated: millions), [youth exchanges](participants engaged: thousands), and [artistic collaborations](projects undertaken: 500+), they [worked tirelessly](hours dedicated: countless) to [cultivate empathy and respect](legacy: global harmony) among nations. Amidst the challenges of [political tensions](diplomatic hurdles: navigated), [linguistic barriers](translations provided: multilingual), and [cultural misunderstandings](dialogue encouraged: open), they [remained steadfast](resolve: unwavering) in their commitment to [building bridges](vision: Istanbul as a cultural hub) [across continents](impact: transformative). And as the [inaugural cultural exchange summit](anticipated launch: 06/30/2026) drew near, they [stood ready](anticipation: palpable) to [showcase Istanbul's rich heritage](impact: profound) and [promote peace and understanding](legacy: interconnected world)",
                "Johannesburg, where the rhythm of life pulsated with the beat of multiculturalism and the spirit of resilience echoed through every corner, a team of [visionaries](team size: 12,000) embarked on a [mission to empower marginalized communities](goal: social equity). Armed with [holistic development programs](initiatives launched: 800+), [economic empowerment initiatives](projects implemented: 1000+), and [educational opportunities](workshops conducted: 2000+), they aimed to [break the cycle of poverty](impact: city-wide) and [foster inclusive growth](vision: empowered Johannesburg). Through [grassroots mobilization](volunteers engaged: 50,000+), [government collaboration](policies influenced: 50+), and [corporate partnerships](collaborations: 300+), they [worked tirelessly](hours dedicated: countless) to [create a more just society](legacy: equitable city) where every individual had the opportunity to thrive. Amidst the challenges of [inequality](opportunities expanded: progressively), [unemployment](job creation initiatives: prioritized), and [social injustice](awareness campaigns: ongoing), they [remained unwavering](resolve: unyielding) in their commitment to [building a better future](impact: transformative) [for all Johannesburg residents](vision: inclusive metropolis). And as the [inaugural community development project](anticipated launch: 07/31/2026) drew near, they [stood ready](anticipation: palpable) to [turn their vision into reality](legacy: empowered communities) [and inspire change](vision: Johannesburg as a model city) [across the globe](impact: far-reaching).  Rio de Janeiro, where the colors of Carnival danced in the streets and the rhythms of samba filled the air, a team of [change-makers](team size: 15,000) embarked on a [mission to promote social inclusion](goal: equitable society). Armed with [community empowerment programs](initiatives launched: 1000+), [youth development initiatives](projects implemented: 1500+), and [arts and culture projects](events organized: 2000+), they aimed to [nurture a sense of belonging](impact: city-wide) and [celebrate diversity](vision: united Rio). Through [collaboration with grassroots organizations](partnerships: 500+), [government advocacy](policies influenced: 100+), and [private sector engagement](sponsorships secured: millions), they [worked tirelessly](hours dedicated: countless) to [break down barriers](legacy: inclusive society) and [create pathways for success](vision: empowered communities) for all residents. Amidst the challenges of [economic inequality](opportunities expanded: progressively), [urban violence](community safety initiatives: prioritized), and [cultural marginalization](representation increased: significantly), they [remained resolute](resolve: unwavering) in their commitment to [building a brighter future](impact: transformative) [for Rio's citizens](vision: Rio for all). And as the [inaugural social inclusion campaign](anticipated launch: 08/31/2026) drew near, they [stood ready](anticipation: palpable) to [spark positive change](legacy: empowered generations) [and inspire cities](impact: global) [around the world](vision: Rio as a beacon of social progress). Shanghai, where the skyline shimmered with modern skyscrapers and the streets buzzed with energy, a team of [innovators](team size: 20,000) embarked on a [mission to promote sustainable urbanization](goal: eco-friendly metropolis). Armed with [green building initiatives](projects implemented: 1000+), [renewable energy projects](initiatives launched: 2000+), and [smart city solutions](technologies deployed: 5000+), they aimed to [transform Shanghai into a model of environmental stewardship](impact: city-wide). Through [public-private partnerships](collaborations: 1000+), [citizen engagement campaigns](events organized: 5000+), and [government collaboration](policies influenced: 100+), they [worked tirelessly](hours dedicated: countless) to [create a more sustainable future](vision: green Shanghai) for generations to come. Amidst the challenges of [rapid urbanization](planning strategies:",

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
        let maxTime = 60;
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