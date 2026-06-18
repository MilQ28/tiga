<header class="flex justify-between bg-slate-900 text-white p-6 top-0 fixed w-full not-italic">
    <div class="flex lg:flex-row flex-col  justify-between items-center w-full max-w-7xl mx-auto">
        <div class="flex items-center">
            <img src="{{ url('https://bit-jkt.telkomuniversity.ac.id/wp-content/uploads/2023/02/cropped-logo_telkom_university.png') }}"
                alt="" width="80px ">
            <h1 class="text-2xl">SMK Telyu</h1>
        </div>
        <div class="flex gap-3 items-center ">
            <a href="/" class=" {{ request()->routeIs('dashboard') ? 'text-gray-400' : 'text-white' }}">Home</a>
            <a href="/information"
                class="{{ request()->routeIs('information') ? 'text-gray-400 ' : 'text-white' }}">Information</a>
            <a href="/admin">Admin</a>
        </div>
    </div>
</header>
