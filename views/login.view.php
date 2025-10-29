<div class="flex min-h-screen">

  <div class="w-1/2 bg-neutral flex flex-col justify-center items-center text-white">
    <h2 class="text-xl font-light mb-2">Bem-vindo ao</h2>
    <h1 class="text-6xl font-bold text-primary">LockBox</h1>
  </div>
  <div class="w-1/2 bg-base-100 flex flex-col justify-center items-center">
    <div class="card w-96 bg-base-200 shadow-xl">
      <div class="card-body">
        <h2 class="text-2xl font-bold text-center mb-4">Faça seu Login</h2>

        <?php if ($mensagem = flash()->get('mensagem')): ?>
          <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span> <?= $mensagem ?></span>
          </div>
        <?php endif; ?>


        <!-- Mensagem Erro de Login -->

        <?php if ($validacoes = flash()->get("validacoes_login")): ?>
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


        <form action="/login" method="POST" class="space-y-4">

          <input type="hidden" name="acao" value="logar">

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Email</span>
            </div>
            <input
              type="text"

              value="<?= old('email') ?> "

              name="email"

              class="input input-bordered w-full" />
          </label>

          <label class="form-control w-full">
            <div class="label">
              <span class="label-text font-medium">Senha</span>
            </div>
            <input
              type="password"

              name="senha"

              value="<?= old('senha') ?>"

              class="input input-bordered w-full" />
          </label>

          <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary w-full">Logar</button>
          </div>

          <p class="text-center text-sm mt-3 text-gray-500">
            Não tem login?
            <a href="/registro" class="link link-primary font-medium">Registre-se</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
