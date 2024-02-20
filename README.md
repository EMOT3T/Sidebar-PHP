## Sidebar PHP - Projeto Readme

---

### Descrição

Este é um projeto de sidebar em PHP que pode ser facilmente integrado em outros projetos web para adicionar funcionalidades de navegação e controle de acesso baseado em níveis de usuário. A sidebar é flexível e pode ser incluída dinamicamente usando o método `request('sidebar.php')` ou adicionada diretamente no código principal, dependendo das necessidades do desenvolvedor.

A sidebar implementa um sistema de verificação de nível de usuário usando cookies de sessão. Se o usuário for um administrador (nível 1), a sidebar exibirá opções específicas para administradores. Além disso, há a possibilidade de fazer essa verificação diretamente com a solicitação dessa informação no banco de dados.

---

### Instruções de Uso

1. **Integração da Sidebar:**

   - Método 1: Incluir a sidebar usando `request('sidebar.php')` no início do código.
   
   - Método 2: Adicionar diretamente o código da sidebar no arquivo principal.

2. **Verificação de Nível de Usuário:**

   Certifique-se de que a variável `$user_level` esteja corretamente configurada para capturar o nível de usuário a partir das informações de sessão.

3. **Controle de Acesso para Administradores:**

   Utilize a estrutura condicional `<?php if ($user_level == 1): ?>` para envolver as seções da sidebar que devem ser visíveis apenas para administradores.
