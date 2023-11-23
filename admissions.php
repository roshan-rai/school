
  <style>

 .background-container {
    background-image: url('aboutimage.jpg');
    background-size: cover;
    height: 100vh;
    width: 100%;
    position: relative;
    display: flex;
}

.image-box {
    flex: 1;
    max-width: 10%; /* Adjust the width of the image box as needed */
    padding: 20px; /* Optional: Add padding for spacing */
    background-color: rgba(255, 255, 255, 0.8);
    box-sizing: border-box; /* Include padding in the width */
}

.image-box img {
    width: 100%;
    height: auto;
    display: block;
}

.explanation {
    flex: 1;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    box-sizing: border-box; /* Include padding in the width */
}


    .content {
      width: 50%;
      padding: 20px;
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: red; /* Set the text color to white */
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      font-size: 20px; /* Adjust the font size as needed */
    }
  </style>


  <div class="content">
    <p style="font-size: 50px;">
      Test for admissions
    </p>
  </div>
