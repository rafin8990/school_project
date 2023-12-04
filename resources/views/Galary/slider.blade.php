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
</style>


<div class="max-w-screen-lg mx-auto my-8">
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