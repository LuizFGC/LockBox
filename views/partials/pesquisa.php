<!-- Barra Pesquisa -->
<div class="mt-3 ">
    <form action="/criar" class="flex space-x-4 w-full px-3 ">
        <input type="hidden" name="acao" value="pesquisar">
        <label class="input  w-full">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    stroke-width="2.5"
                    fill="none"
                    stroke="currentColor"
                >
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="text" placeholder="Pesquisar Notas" name="pesquisar" />
        </label>

        <button type="submit" class="btn btn-primary">+ Item</button>
    </form>
</div>