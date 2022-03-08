@extends('layout')
@section('title', 'contactus')
@section('contactuscontent')
<style>
  .container .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .container .content .left-side {
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
  }

  .content .left-side::before {
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
  }

  .content .left-side .details {
    margin: 14px;
    text-align: center;
  }

  .content .left-side .details i {
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
  }

  .content .left-side .details .topic {
    font-size: 18px;
    font-weight: 500;
  }

  .content .left-side .details .text-one,
  .content .left-side .details .text-two {
    font-size: 14px;
    color: #afafb6;
  }

  .container .content .right-side {
    width: 75%;
    margin-left: 75px;
  }

  .content .right-side .topic-text {
    font-size: 23px;
    font-weight: 600;
    color: #3e2093;
  }

  .right-side .input-box {
    height: 50px;
    width: 100%;
    margin: 12px 0;
  }

  .right-side .input-box input,
  .right-side .input-box textarea {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
  }

  .right-side .message-box {
    min-height: 110px;
  }

  .right-side .input-box textarea {
    padding-top: 6px;
  }

  .right-side .button {
    display: inline-block;
    margin-top: 12px;
  }

  .right-side .button input[type="button"] {
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #3e2093;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .button input[type="button"]:hover {
    background: #5029bc;
  }

  @media (max-width: 950px) {
    .container {
      width: 90%;
      padding: 30px 40px 40px 35px;
    }

    .container .content .right-side {
      width: 75%;
      margin-left: 55px;
    }
  }

  @media (max-width: 820px) {

    .container .content {
      flex-direction: column-reverse;
    }

    .container .content .left-side {
      width: 100%;
      flex-direction: row;
      margin-top: 40px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .container .content .left-side::before {
      display: none;
    }

    .container .content .right-side {
      width: 100%;
      margin-left: 0;
    }
  }
</style>
<div class="site wrapper-content">
  <div class="top_site_main" style="background-image: url(&quot;images/contactus.png&quot;); padding-top: 500px;">
    <div class="banner-wrapper container article_heading">

      <h1 class="heading_primary">CONTACT US</h1>
    </div>
  </div>
</div>
<div class="container">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one">Surkhet, NP12</div>
        <div class="text-two">Birendranagar 06</div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one">+0098 9893 5647</div>
        <div class="text-two">+0096 3434 5678</div>
      </div>
      <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">codinglab@gmail.com</div>
        <div class="text-two">info.codinglab@gmail.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">We'd Love To Hear From You</div>
      <p>Send us a message and we'll respond as soon as possible</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" reaquired>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" reaquired>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your subject" required>
        </div>
        <div class="input-box message-box">
          <input type="textarea" placeholder="Enter your meaasages" required>
        </div>
        <div class="button">
          <button type="submit">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection