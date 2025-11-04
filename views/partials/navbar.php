

        <div class="navbar bg-base-100 shadow-sm px-10 z-50">
            <!-- Logo -->
            <div class="flex-1 ">
                <a href="/dashboard" class="text-2xl font-bold text-white tracking-tight transition hover:scale-110 ">
                    Lock<span class="text-[#0070f3]">Box</span>
                </a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1 font-bold">
                    <li><a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </a></li>
                    <li>
                        <details>
                            <summary ><?=$usuario->nome?></summary>
<ul class="bg-base-100 rounded-t-none p-2">
    <li><a href="/Perfil">Perfil</a></li>

    <li class="text-red-500">
        <form action="/login" method="POST">
            <input type="hidden" name="acao" value="logout">
            <button type="submit">Logout</button>
        </form>
    </li>

</ul>
</details>
</li>
</ul>
</div>
</div>
