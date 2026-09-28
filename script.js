document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("issueForm");
  const message = document.getElementById("formMessage");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const area = document.getElementById("area").value.trim();
    const issue = document.getElementById("issue").value;

    if (!name || !area || !issue) {
      message.textContent = "Please complete all required fields.";
      return;
    }

    message.textContent =
      `Thank you, ${name}. Your ${issue.toLowerCase()} report for ${area} has been recorded in this Stage 1 prototype.`;

    form.reset();
  });
});
