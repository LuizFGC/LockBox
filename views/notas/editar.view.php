

<!-- Menu e Forms -->
    <div class="bg-base-200 w-full rounded-r-box p-6 ">

        <form action="/criar" method="POST" class="space-y-6">
            <input type="hidden" name="acao" value="excluir">
            <!-- Campo Título -->
            <div>
                <label for="titulo" class="block text-gray-300 text-sm mb-2">Título</label>
                <input
                    type="text"
                    id="titulo"
                    name="titulo"
                    placeholder="Digite o titulo"
                    class="w-full px-4 py-2 bg-[#2A2A2A] border border-gray-700 rounded-md text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                />
            </div>

            <!-- Campo Nota -->
            <div>
                <label for="nota" class="block text-gray-300 text-sm mb-2">Sua nota</label>
                <textarea
                    id="nota"
                    name="nota"
                    rows="4"
                    class="w-full px-4 py-2 bg-[#2A2A2A] border border-gray-700 rounded-md text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Digite sua nota..."
                ></textarea>
            </div>

            <!-- Botões -->
            <div class="flex justify-between">
                <button
                    type="submit"
                    class="bg-red-500 text-white px-5 py-2 rounded-md hover:bg-red-600 transition-colors"
                >
                    Deletar
                </button>

        </form>
        <form action="/criar" method="post">
            <input type="hidden" name="acao" value="atualizar">
            <button
                type="submit"
                class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-colors"
            >
                Atualizar
            </button>
    </div>
    </form>

</div>


</div>
