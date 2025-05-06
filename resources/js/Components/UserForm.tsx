
import React, { useState } from 'react';

interface FormData {
  username: string;
  email: string;
  city: string;
}

const UserForm = () => {
  const [formData, setFormData] = useState<FormData>({
    username: '',
    email: '',
    city: ''
  });

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({
      ...prev,
      [name]: value
    }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    
    try {
      const response = await fetch('/addUser', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        },
        body: JSON.stringify(formData)
      });

      const data = await response.json();
      console.log('Success:', data);
      // Handle success (e.g., show notification, redirect)
    } catch (error) {
      console.error('Error:', error);
      // Handle error
    }
  };

  return (
    <div className="form-container">
      <h1 className="form-title">User Form</h1>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          name="username"
          value={formData.username}
          onChange={handleChange}
          placeholder="Enter user name"
          className="form-input"
        />
        <input
          type="email"
          name="email"
          value={formData.email}
          onChange={handleChange}
          placeholder="Enter your email"
          className="form-input"
        />
        <input
          type="text"
          name="city"
          value={formData.city}
          onChange={handleChange}
          placeholder="Enter your city"
          className="form-input"
        />
        <button type="submit" className="form-button">
          Add New User
        </button>
      </form>
    </div>
  );
};

export default UserForm;