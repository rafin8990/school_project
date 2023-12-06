<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.8/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d703802588.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>
<body>
<style>
.font{
    font-family: 'Playfair Display', serif;
}
.underline-animation {
      position: relative;
      text-decoration: none;
      display: inline-block;
    }

    .underline-animation:hover::before {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #71b4e1; 
      animation: underline 0.3s ease-in-out;
    }

    @keyframes underline {
      0% {
        transform: scaleX(0);
      }
      100% {
        transform: scaleX(1);
      }
    }

    .fill-animation {
      position: relative;
      display: inline-block;
      overflow: hidden;
      text-decoration: none;
      color: black; /* Text color */
    }

    .fill-animation::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: #71b4e1; /* Initial color before hover */
      z-index: -1;
      transition: height 0.3s ease-in-out; /* Animation transition */
    }

    .fill-animation:hover::before {
      height: 100%; 
    }
</style>
@include('/Message/message')
    @include('/shared/navbar')
    
    {{-- <div class='lg:w-[1200px] mx-auto'>

     <!-- mmm  -->
            <h1 class='text-2xl md:text-6xl font-bold text-center my-10 font'>Contact</h1>
            <div class='md:flex justify-around items-center'>
                <div class='lg:w-1/2'>
                    <div>
                        <p class='text-xl text-black'>Address:</p>
                        <p class='text-xl'>Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                    </div>
                    <div class='mt-5'>
                        <p class='text-xl text-black'>Mobile:</p>
                        <p class='text-xl'>000-123-456-7890</p>
                    </div>
                    <div class='mt-5'>
                        <p class='text-xl text-black'>💌Email:</p>
                        <p class='text-xl'>nc.example@example.com</p>
                    </div>
                    <div class='mt-5'>
                        <p class='text-xl text-black'>🌏 SOCIALS</p>
                        <div class='flex'>
                            <p class='text-xl ml-2'><i class="fa-brands fa-facebook"></i></p>
                            <p class='text-xl ml-2'><i class="fa-brands fa-twitter"></i></p>
                            <p class='text-xl ml-2'><i class="fa-brands fa-youtube"></i></p>
                            <p class='text-xl ml-2'> <i class="fa-brands fa-telegram"></i></p>
                        </div>
                    </div>
                </div>
                <div class='p-5 lg:w-1/2'>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text">Name:</span>
                        </label>
                        <input type="text" placeholder="Example Doe" class="input input-bordered w-full " />
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text">Email:</span>
                        </label>
                        <input type="email" placeholder="Example@gmail.com" class="input input-bordered w-full " />
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text">Message:</span>
                        </label>
                        <input type="text" class="textarea textarea-bordered h-24 " />
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-accent">sent</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-10"> 
            <h2 class="text-3xl text-center my-10 font-bold">Find Our Location</h2>
        </div>
        <div >
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8619579860597!2d90.36250424105654!3d23.82350729244121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13ac13ad049%3A0xb229d29380cbb2bd!2sAlba%20Tower%2C%20Begum%20Rokeya%20Ave%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1694496806107!5m2!1sen!2sbd" 
              width=100% 
              height="400" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" r
               eferrerpolicy="no-referrer-when-downgrade">
            </iframe>
    </div> --}}

    
    <div class="bg-gray-100 pb-10">
        <div class="md:flex md:mx-52 pt-20">
            <div class="w-[300px] border mx-10 pb-10 rounded bg-white">
                <div class="flex justify-center mt-5 "><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Location_icon_from_Noun_Project.png/640px-Location_icon_from_Noun_Project.png" class="w-[80px] h-[80px] "></div>
                <h3 class='text-2xl text-accent text-center pt-3 mb-5'>Address Way</h3>
                <p class='text-[15px] text-center mx-2 '>Photo booth tattooed prism,<br> portland taiyaki hoodie neutra typewriter</p>
            </div>
            <div class="w-[300px] border mx-10 text-center rounded bg-white">
                <div class="flex justify-center mt-7"><img src="https://cdn-icons-png.flaticon.com/512/3095/3095583.png" class="w-[50px] h-[50px] "></div>
                <h3 class='text-2xl text-accent pt-7 mb-5'>Contact Info</h3>
               
                <p class='text-[15px]'>000-123-456-7890</p>
                {{-- <p class='text-lg text-black font-bold'>Email:</p> --}}
                <p class='text-[15px]'>nc.example@example.com</p>
                {{-- <p class='text-xl ml-2'>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"> </i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-telegram"></i>
                </p> --}}
                
            </div>
            <div class="w-[300px] border mx-10 rounded bg-white">
                <div class="flex justify-center mt-7"><img src="https://static.vecteezy.com/system/resources/previews/009/342/688/non_2x/clock-icon-clipart-design-illustration-free-png.png" class="w-[50px] h-[50px] "></div>
                <h3 class='text-2xl text-accent text-center pt-7 mb-5'>Worker Time</h3>
                <p class='text-[15px] text-center '>Monday - Friday: 09:00 - 20:00
                    <br>Sunday & Saturday: 10:30 - 22:0</p>
            </div>
        </div>
      
    </div>

    <div class="md:mx-52 pt-12">
        <h2 class="text-2xl text-black ml-32 mb-10 text-center">Fill the form below so we can get to know you and your needs better</h2>
        <div class="flex justify-center">
          <div class='p-5 lg:w-1/2'>
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">Name:</span>
                </label>
                <input type="text" placeholder="Example Doe" class="input input-bordered w-full " />
            </div>
            <div class="form-control w-full ">
                <label class="label">
                    <span class="label-text">Email:</span>
                </label>
                <input type="email" placeholder="Example@gmail.com" class="input input-bordered w-full " />
            </div>
            <div class="form-control w-full ">
                <label class="label">
                    <span class="label-text">Message:</span>
                </label>
                <input type="text" class="textarea textarea-bordered h-24 " />
            </div>
            <div class="mt-5 flex justify-center ">
                <button class="btn btn-accent w-[100px] text-xl">Submit</button>
            </div>
          </div>
        </div>

        <div class="mt-10 mb-10">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8619579860597!2d90.36250424105654!3d23.82350729244121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13ac13ad049%3A0xb229d29380cbb2bd!2sAlba%20Tower%2C%20Begum%20Rokeya%20Ave%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1694496806107!5m2!1sen!2sbd" 
            width=100% 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" r
            eferrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
    </div>

    @include('/shared/footer')

  

</body>
</html>