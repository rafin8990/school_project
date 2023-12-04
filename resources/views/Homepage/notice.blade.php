<style>
    @keyframes scrollLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .scroll-container {
        white-space: nowrap;
        overflow: hidden;
        animation: scrollLeft 15s linear infinite;
        /* Adjust the duration as needed */
    }

    .scroll-content {
        display: inline-block;
    }
</style>


<div class="scroll-container">
    <div class="scroll-content text-2xl">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, quas neque necessitatibus laudantium amet asperiores quasi nihil voluptatibus ipsum consectetur aspernatur sunt
</div>
</div>