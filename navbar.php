<header class="w-full bg-teal-500 h-16 xl:h-20 relative shadow-md mb-2">
    <nav class="global-container h-full">
        <div class="flex items-center justify-between h-full">
            <a href="/">
                <img src="<?php echo $url ?>/asset/logo-1.png" alt="scholarwithtech"
                    class="w-60 xl:w-80 h-full object-cover" />
            </a>
            <div class="hidden xl:block">
                <form action="" class="flex items-center justify-center bg-white px-4 py-2 rounded-md">
                    <input type="text" class="lg:w-[280px] xl:w-[300px] focus:outline-none"
                        placeholder="Search here....." />
                    <button type="submit" class="flex items-center justify-center">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </form>
            </div>
            <div class="hidden xl:block">
                <ul class="flex items-center justify-center gap-4">
                    <li
                        class="cursor-pointer px-4 py-2 bg-white rounded-md font-medium text-lg hover:shadow-md hover:font-bold">
                        <a href="">Science</a>
                    </li>
                    <li
                        class="cursor-pointer px-4 py-2 bg-white rounded-md font-medium text-lg hover:shadow-md hover:font-bold">
                        <a href="">Science</a>
                    </li>
                    <li
                        class="cursor-pointer px-4 py-2 bg-white rounded-md font-medium text-lg hover:shadow-md hover:font-bold">
                        <a href="">Science</a>
                    </li>
                    <li
                        class="cursor-pointer px-4 py-2 bg-white rounded-md font-medium text-lg hover:shadow-md hover:font-bold">
                        <a href="">Science</a>
                    </li>
                </ul>
            </div>
            <div class="flex xl:hidden px-4 items-center justify-center">
                <span class="material-symbols-outlined text-4xl text-white block" id="menu">
                    menu
                </span>
                <span class="material-symbols-outlined text-4xl text-white hidden" id="close">
                    close
                </span>
            </div>
        </div>
    </nav>
    <!-- mobile nav  -->
    <div class="absolute top-16 right-[-350px] w-[300px] h-[100vh] bg-teal-500 shadow-md transition-all duration-500"
        id="sidebar">
        <div class="h-full flex flex-col items-start justify-start gap-2">
            <div class="px-2 mx-2 border-b-[1px] border-white w-full">
                <h2 class="text-white text-xl font-semibold">Hot Topics</h2>
            </div>
            <div class="w-full flex flex-col items-start justify-start gap-2 px-2 mx-2">
                <a href=""
                    class="text-lg font-semibold text-black w-[80%] px-2 py-2 text-center bg-white rounded-md">Science</a>
                <a href=""
                    class="text-lg font-semibold text-black w-[80%] px-2 py-2 text-center bg-white rounded-md">Science</a>
                <a href=""
                    class="text-lg font-semibold text-black w-[80%] px-2 py-2 text-center bg-white rounded-md">Science</a>
                <a href=""
                    class="text-lg font-semibold text-black w-[80%] px-2 py-2 text-center bg-white rounded-md">Science</a>
            </div>
            <div class="px-2 mx-2 border-b-[1px] border-white w-full">
                <h2 class="text-white text-xl font-semibold">Search Here</h2>
            </div>
            <div class="px-2 mx-2">
                <form action="" class="flex items-center justify-center bg-white rounded-md px-2 py-2">
                    <input type="text" class="w-full focus:outline-none" />
                    <button type="submit" class="flex items-center justify-center">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>