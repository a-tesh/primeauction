
<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/dollar.png" type="image/png" sizes="16x16">
    <title>Payment Success</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    body {
    background: #dcf0fa;
}

.container {
    max-width: 380px;
    margin: 150px auto;
    overflow: hidden;

}

.printer-top {
    z-index: 1;
    border: 6px solid #666666;
    height: 6px;
    border-bottom: 0;
    border-radius: 6px 6px 0 0;
    background: #333333;
}

.printer-bottom {
    z-index: 0;
    border: 6px solid #666666;
    height: 6px;
    border-top: 0;
    border-radius: 0 0 6px 6px;
    background: #333333;
}

.paper-container {
    position: relative;
    overflow: hidden;
    height: 467px;
}

.paper {
    background: #ffffff;
    font-family: 'Poppins', sans-serif;
    height: 447px;
    position: absolute;
    z-index: 2;
    margin: 0 12px;
    margin-top: -12px;
    animation: print 5000ms cubic-bezier(0.68, -0.55, 0.265, 0.9);
    animation-iteration-count: 1; /* Run animation only once */
    -moz-animation: print 5000ms cubic-bezier(0.68, -0.55, 0.265, 0.9);
    -moz-animation-iteration-count: 1; /* Run animation only once in Firefox */
}

.main-contents {
    margin: 0 12px;
    padding: 24px;
}

.jagged-edge {
    position: relative;
    height: 20px;
    width: 100%;
    margin-top: -1px;
}

.jagged-edge:after {
    content: "";
    display: block;
    position: absolute;
    //bottom: 20px;
    left: 0;
    right: 0;
    height: 20px;
    background: linear-gradient(45deg,
            transparent 33.333%,
            #ffffff 33.333%,
            #ffffff 66.667%,
            transparent 66.667%),
        linear-gradient(-45deg,
            transparent 33.333%,
            #ffffff 33.333%,
            #ffffff 66.667%,
            transparent 66.667%);
    background-size: 16px 40px;
    background-position: 0 -20px;
}

.success-icon {
    text-align: center;
    font-size: 48px;
    height: 72px;
    background: #359d00;
    border-radius: 50%;
    width: 72px;
    height: 72px;
    margin: 16px auto;
    color: #fff;
}

.success-title {
    font-size: 22px;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    color: #666;
    font-weight: bold;
    margin-bottom: 16px;
    color: #32a852;

}

.success-description {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    line-height: 21px;
    color: #999;
    text-align: center;
    margin-bottom: 24px;
}

.order-details {
    text-align: center;
    color: #333;
    font-weight: bold;
}

.order-number-label {
    font-size: 18px;
    margin-bottom: 8px;
}

.order-number {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    line-height: 48px;
    font-size: 48px;
    padding: 8px 0;
    margin-bottom: 24px;
}

.complement {
    font-size: 18px;
    margin-bottom: 8px;
}

@keyframes print {
    0% {
        transform: translateY(-90%);
    }

    100% {
        transform: translateY(0%);
    }
}

@-webkit-keyframes print {
    0% {
        -webkit-transform: translateY(-90%);
    }

    100% {
        -webkit-transform: translateY(0%);
    }
}

@-moz-keyframes print {
    0% {
        -moz-transform: translateY(-90%);
    }

    100% {
        -moz-transform: translateY(0%);
    }
}

@-ms-keyframes print {
    0% {
        -ms-transform: translateY(-90%);
    }

    100% {
        -ms-transform: translateY(0%);
    }
}
.btn {
  cursor:pointer;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    border-radius:8px;
}
</style>

<body>
    <div class="container ">
        <div class="printer-top"></div>

        <div class="paper-container">
            <div class="printer-bottom"></div>

            <div class="paper">
                <div class="main-contents">
                    <div class="success-icon">&#10004;</div>
                    <div class="success-title ">
                        Payment Complete
                    </div>
                    <div class="success-description">
                        Thank you for completing the payment! You will shortly receive an email of your payment.
                    </div>
                    <div class="order-details">
                        <div class="order-number-label d-none"></div>
                        <a href={{url('')}} ><button class='order-number btn btn-success rounded-1'>Home</button></a>
                        <div class=" d-none"></div>
                        <div class="complement">Thank You!</div>
                    </div>
                </div>
                <div class="jagged-edge"></div>
            </div>
        </div>
    </div>
</body>
</html>
