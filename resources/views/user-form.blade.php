<style>
  .form-container {
    max-width: 28rem;
    margin: 0 auto;
    padding: 1.5rem;
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }
  .form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 1.5rem;
    text-align: center;
  }
  .form-input {
    width: 100%;
    padding: 0.5rem 1rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    transition: all 0.2s ease;
  }
  .form-input:focus {
    outline: none;
    border-color: transparent;
    box-shadow: 0 0 0 2px #3b82f6;
  }
  .form-button {
    width: 100%;
    background: #2563eb;
    color: white;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }
  .form-button:hover {
    background: #1d4ed8;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  }
</style>

<div class="form-container">
   <h1 class="form-title">User Form</h1>
   <form action="addUser" method="POST">
    @csrf
    <input type="text" placeholder="Enter user name" class="form-input">
    <input type="email" placeholder="Enter your email" class="form-input">
    <input type="text" placeholder="Enter your city" class="form-input">
    <button type="submit" class="form-button">Add New User</button>
   </form>
</div>