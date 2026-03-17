<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body
    class="bg-gray-100 min-h-screen flex items-center justify-center font-mono"
  >
    <div class="main bg-white w-1/4 p-14 rounded-xl shadow-lg">
      <img
        src="./public/company-logo.png"
        alt="Company Logo"
        class="h-24 mx-auto mb-10"
      />
      <form class="flex flex-col gap-6" action="#" method="post">
        <input
          class="bg-gray-200 text-center p-2 rounded-md border focus:border-blue-200 focus:outline-none"
          type="text"
          placeholder="Username / Email"
          name="username"
          id="username"
          required
        />
        <input
          class="bg-gray-200 text-center p-2 rounded-md border focus:outline-none focus:border-blue-200"
          type="password"
          placeholder="Passowrd"
          name="password"
          id="password"
          required
        />
        <input
          type="submit"
          value="Login"
          class="bg-blue-500 hover:bg-blue-600 px-4 text-sm mx-auto py-2 rounded-2xl uppercase tracking-wider"
        />
      </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
      const form = document.querySelector("form");
      const button = document.querySelector("button");
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        let username = document.querySelector("#username");
        let password = document.querySelector("#password");

        if (!username || !password) {
          alert("Fill required fields.");
        } else {
          // button.textContent = "Verifying...";
          // button.disabled = true;
          form.action = "./check-credentials.php";
          form.submit();
        }
      });
    </script>
  </body>
</html>
