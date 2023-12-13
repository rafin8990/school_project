<style>
    .slider-container {
        overflow: hidden;
    }

    .slider-wrapper {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slider-item {
        flex: 0 0 100%;
        box-sizing: border-box;
    }

    .scroll-container {
        overflow: hidden;
    }

    .scroll-item {
        opacity: 0;
        transform: translateY(100%);
        transition: transform 0.5s, opacity 0.5s;
    }
</style>

<div class="md:flex lg:w-[1200px] mx-auto">
    <div>
        <div class="max-w-screen-md mx-auto my-8">
            <div class="slider-container">
                <div class="slider-wrapper" id="sliderWrapper">
                    <!-- Your slider items go here -->
                    <div class="slider-item  ">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://mwmacademy.org/uploads/image/image_file/178/ih1920_teacher-helping-student.jpeg"
                            alt="">
                    </div>
                    <div class="slider-item ">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://www.educationteam.com/wp-content/uploads/2023/07/slider-img2.jpg" alt="">
                    </div>
                    <div class="slider-item ">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://www.dataprojections.com/wp-content/uploads/2021/06/DP-Academy-Professional-Development-Teachers-Staff-Slider-1400x600-1.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-10">
            <div class="max-w-screen-md mx-auto my-5 border border-blue-400 p-3">
                <h1 class="text-4xl font-semibold text-center font my-10">Welcome to our school</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi quisquam perspiciatis voluptatum
                    corrupti.
                    Voluptatum ad itaque iusto? Aut laboriosam neque laudantium repellendus ab ex quos porro quae velit
                    ducimus
                    quidem consequatur aliquid nobis, nam fugiat doloremque quod esse alias error, exercitationem
                    reiciendis
                    placeat
                    doloribus soluta. Officiis tempore iure cumque obcaecati. Ducimus asperiores tempore sequi
                    repudiandae
                    ipsam
                    soluta saepe magni iure!</p>
            </div>
            <div class="max-w-screen-md mx-auto my-10 border border-blue-400">
                <h1 class="text-4xl font-semibold font bg-blue-400 text-white p-2">Head Teacher</h1>
                <div class="flex p-2">
                    <img class="w-1/5" src="https://selvamarts.edu.in/wp-content/uploads/2016/01/PrincipalPhoto.jpg"
                        alt="">
                    <div class="mx-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consequatur molestiae veritatis
                            repudiandae
                            at ab a earum reprehenderit architecto odit, dolor corrupti vel sed ratione aliquid
                            voluptates
                            quod
                            fugiat unde. Dolorem non vel eligendi laudantium maiores consectetur culpa rerum delectus
                            repudiandae
                            reiciendis eum praesentium eaque alias placeat inventore voluptatum sint illo id voluptate
                            necessitatibus excepturi sed, est obcaecati. Possimus non laudantium quaerat vel rerum
                            maxime
                            magnam
                            recusandae voluptates quasi magni.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ml-5">
        <div class="border border-blue-400 ">
            <h1 class="text-xl p-3 bg-blue-900 text-white font font-semibold">Notice</h1>
            <div class="scroll-container max-w-lg p-4">
                <div class="scroll-item my-2 mx-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur.</p>
                    <div class="flex ">
                        <h1 class="text-blue-500">12 December 2023</h1>
                        <a class="ml-10 text-blue-500" href=""><i class="fa-solid fa-download"></i> Download</a>
                    </div>
                </div>
                <div class="scroll-item my-2 mx-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur.</p>
                    <div class="flex ">
                        <h1 class="text-blue-500">12 December 2023</h1>
                        <a class="ml-10 text-blue-500" href=""><i class="fa-solid fa-download"></i> Download</a>
                    </div>
                </div>
                <div class="scroll-item my-2 mx-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur.</p>
                    <div class="flex ">
                        <h1 class="text-blue-500">12 December 2023</h1>
                        <a class="ml-10 text-blue-500" href=""><i class="fa-solid fa-download"></i> Download</a>
                    </div>
                </div>
                <div class="scroll-item my-2 mx-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consectetur.</p>
                    <div class="flex ">
                        <h1 class="text-blue-500">12 December 2023</h1>
                        <a class="ml-10 text-blue-500" href=""><i class="fa-solid fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="my-5 max-w-lg  border border-blue-400">
                <h1 class="text-4xl font-semibold font bg-blue-400 text-white p-2">Usefull links</h1>
                <ul class="p-2">
                    <li class="text-lg font-semibold text-blue-500"><a href="">Education Board Result</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Dc Office</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Dinajpur Education Board</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Directorate of Primary Education</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Ministry of Education</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Teachers Portal</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">National Curriculum and Texbook Board</a>
                    </li>
                </ul>
            </div>
            <div class="my-5 max-w-lg border border-blue-400">
                <h1 class="text-4xl font-semibold font bg-blue-400 text-white p-2">Explore</h1>
                <ul class="p-2">
                    <li class="text-lg font-semibold text-blue-500"><a href="">Online Magazine 20182-19</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Use of MMC Monitoring App</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">IT Club</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Science Club</a></li>
                    <li class="text-lg font-semibold text-blue-500"><a href="">Photography Club</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>



<script>
    // Auto slide functionality
    let currentIndex = 0;
    const sliderWrapper = document.getElementById('sliderWrapper');
    const sliderItems = document.querySelectorAll('.slider-item');

    setInterval(() => {
        currentIndex = (currentIndex + 1) % sliderItems.length;
        const translateValue = `-${currentIndex * 100}%`;
        sliderWrapper.style.transform = `translateX(${translateValue})`;
    }, 3000);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.scroll-item');

  function scrollItems() {
    items.forEach((item, index) => {
      setTimeout(() => {
        item.style.opacity = '1';
        item.style.transform = 'translateY(0)';
      }, index * 1000);
    });
  }

  scrollItems();
});
</script>