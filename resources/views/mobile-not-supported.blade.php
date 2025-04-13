<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Not Supported - JobHirence</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #021526;
      --secondary-color: #6EACDA;
      --accent-color: #E2E2B6;
      --button-color: #03346E;
      --background-color-light: #f7f9fc;
      --background-color-dark: #f9f9f9;
      --text-color: #333;
      --text-color-light: #555;
      --hover-color: #6EACDA;
      --text-light: #f8fafc;
      --card-border: rgba(148, 163, 184, 0.2);
      --card-shadow-soft: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025);
      --card-shadow-strong: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --button-shadow: 0 4px 6px -1px rgba(110, 172, 218, 0.2), 0 2px 4px -1px rgba(110, 172, 218, 0.1);
      --input-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --border-radius: 12px;
      --transition: all 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--background-color-light);
      color: var(--text-color);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
      line-height: 1.6;
    }

    .wrapper {
      max-width: 520px;
      width: 100%;
      background: white;
      padding: 2.5rem;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow-strong);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .wrapper::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .logo-container {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .logo {
      height: 60px;
      width: auto;
    }

    .icon-container {
      background-color: var(--accent-color);
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
    }

    .icon {
      color: var(--primary-color);
      font-size: 2.5rem;
    }

    h1 {
      font-size: 1.75rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    p {
      font-size: 1rem;
      color: var(--text-color-light);
      margin-bottom: 2rem;
    }

    .cta-button {
      background-color: var(--button-color);
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: var(--border-radius);
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: var(--button-shadow);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .cta-button:hover {
      background-color: var(--secondary-color);
      transform: translateY(-2px);
    }

    .cta-button i {
      font-size: 1rem;
    }

    .device-illustration {
      margin: 1rem auto;
      max-width: 200px;
      position: relative;
    }

    .device-illustration img {
      width: 100%;
      height: auto;
    }

    .contact-info a {
      color: var(--secondary-color);
      text-decoration: none;
      font-weight: 500;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .wrapper {
        padding: 1.5rem;
      }

      h1 {
        font-size: 1.5rem;
      }

      p {
        font-size: 0.9375rem;
      }

      .logo {
        height: 50px;
      }

      .icon-container {
        width: 70px;
        height: 70px;
      }

      .icon {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="logo-container">
      <img src="{{ asset('assets/photos/logo.png') }}" alt="JobHirence Logo" class="logo">
    </div>
    
    <div class="icon-container">
      <i class="fas fa-laptop icon"></i>
    </div>
    
    <h1>Optimized for Desktop Experience</h1>
    
    <p>To ensure the best experience with JobHirence, please access our platform from a laptop or desktop computer. Our advanced features are designed to work best with larger screens.</p>
    
    <div class="device-illustration">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" fill="var(--background-color-dark)" stroke="var(--primary-color)"></rect>
        <line x1="8" y1="21" x2="16" y2="21" stroke="var(--primary-color)"></line>
        <line x1="12" y1="17" x2="12" y2="21" stroke="var(--primary-color)"></line>
        <path d="M7 8h10" stroke="var(--secondary-color)" stroke-width="2"></path>
      </svg>
    </div>
    <div class="contact-info">
      Need help? Email us at <a href="mailto:support@jobhirence.com">classycut007@gmail.com</a>
    </div>
  </div>
</body>
</html>