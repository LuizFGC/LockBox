<div class="flex min-h-screen">
 
  <div class="w-1/2 bg-neutral flex flex-col justify-center items-center text-white">
    <h2 class="text-xl font-light mb-2">Crie sua conta no</h2>
    <h1 class="text-6xl font-bold text-primary">LockBox</h1>
    <p class="mt-2 text-gray-400 text-center px-8">
      Guarde seus dados com segurança e praticidade.
    </p>
  </div>

  
  <div class="w-1/2 bg-base-100 flex flex-col justify-center items-center">
    <div class="card w-96 bg-base-200 shadow-xl">
      <div class="card-body">
        <h2 class="text-2xl font-bold text-center mb-4">Crie sua Conta</h2>

        
        <!-- Mensagem Erro de Cadastro -->

        <?php if ($validacoes = flash()->get("validacoes_registrar")): ?>
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


        <form action="/registro" method="POST" class="space-y-4">

            <input type="hidden" name="acao" value="registrar">

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Nome</span>
            </div>
            <input 
            type="text" 

            name="nome" 

            value="<?=old('nome')?>"

            class="input input-bordered w-full"  />
          </label>

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Email</span>
            </div>
            <input 
            
            type="text" 
            
            name="email"  

            value="<?=old('email')?>"
            
            class="input input-bordered w-full"  />
          </label>

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Senha</span>
            </div>
            <input 
            
            type="password" 
            
            name="senha"  

            value="<?=old('senha')?>"
            
            class="input input-bordered w-full"  />
          </label>

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Confirmar Senha</span>
            </div>
            <input 
            
            type="password" 
            
            name="senha_confirmacao" 
            
            class="input input-bordered w-full"  />
          </label>

          <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary w-full">Registrar</button>
          </div>

          <p class="text-center text-sm mt-3 text-gray-500">
            Já tem uma conta?
            <a href="/login" class="link link-primary font-medium">Faça login</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
