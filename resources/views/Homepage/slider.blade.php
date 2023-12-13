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

<div class="md:flex ">
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
                    src="https://www.educationteam.com/wp-content/uploads/2023/07/slider-img2.jpg"
                    alt="">
            </div>
            <div class="slider-item ">
                <img class="h-auto max-w-full rounded-lg"
                    src="https://www.dataprojections.com/wp-content/uploads/2021/06/DP-Academy-Professional-Development-Teachers-Staff-Slider-1400x600-1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
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