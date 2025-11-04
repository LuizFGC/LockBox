<form action="/criar" method="POST" class="space-y-6">
    <!-- Mensagem Erro de Cadastro -->

    <?php if ($validacoes = flash()->get("validacoes_criar")): ?>
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>
              <ul>
                <?php foreach ($validacoes as $validacao): ?>
                    <li>

                    <?= $validacao ?>

                  </li>
                <?php endforeach; ?>
              </ul>
            </span>
        </div>
    <?php endif; ?>

    <input type="hidden" name="acao" value="criar">
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
                class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-colors"
        >
            Salvar
        </button>
    </div>

</form>