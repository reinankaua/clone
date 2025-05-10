document.addEventListener('DOMContentLoaded', function() {
  const registerForm = document.getElementById('registerForm');
  
  if (registerForm) {
    registerForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      
      const name = document.getElementById('fullName').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      
      const formMessage = document.getElementById('formMessage');
      formMessage.innerHTML = '';
      
      if (name.length < 3) {
        formMessage.innerHTML = '<span class="text-danger">Name deve ter pelo menos 3 caracteres.</span>';
        return false;
      }
      
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        formMessage.innerHTML = '<span class="text-danger">Digite um email válido.</span>';
        return false;
      }
      
      if (password.length < 8) {
        formMessage.innerHTML = '<span class="text-danger">A password deve ter pelo menos 8 caracteres.</span>';
        return false;
      }
      
      try {
        const response = await fetch('http://localhost/clone/server/sign-up.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ name, email, password })
        });
        const data = await response.json();
        
        if (data.success) {
          formMessage.innerHTML = '<span class="text-success">Conta criada com sucesso! Faça login para continuar.</span>';
          registerForm.reset();
        } else {
          formMessage.innerHTML = `<span class="text-danger">${data.message || 'Erro ao criar conta.'}</span>`;
        }
        
      } catch (error) {
        formMessage.innerHTML = '<span class="text-danger">Erro ao enviar dados. Tente novamente.</span>';
        console.error('Erro:', error);
      }
      
      return false;
    });
  }

  const loginForm = document.getElementById('loginForm');

  if (loginForm) {
    loginForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;

      const formMessage = document.getElementById('formMessage');
      formMessage.innerHTML = '';

      if (!/^\S+@\S+\.\S+$/.test(email)) {
        formMessage.innerHTML = '<span class="text-danger">Digite um email válido.</span>';
        return false;
      }
      
      if (password.length < 8) {
        formMessage.innerHTML = '<span class="text-danger">A password deve ter pelo menos 8 caracteres.</span>';
        return false;
      }
      
      try {
        const response = await fetch('http://localhost/clone/server/sign-in.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ email, password })
        });

        const data = await response.json();

        if (data.success) {
          window.location.href = 'profile.php';
        } else {
          formMessage.innerHTML = `<span class="text-danger">${data.message}</span>`;
        }
      } catch (error) {
        formMessage.innerHTML = '<span class="text-danger">Erro ao enviar dados. Tente novamente.</span>';
        console.error('Erro:', error);
      }
      
      return false;
    });
  }
});
