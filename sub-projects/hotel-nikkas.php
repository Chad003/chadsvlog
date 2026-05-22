<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Nikkas - Book Your Stay</title>

  <style>
    :root {
      --primary: #893238;
      --primary-dark: #6d252b;
      --secondary: #6f6f72;
      --light: #ffffff;
      --background: #f7f5f4;
      --border: rgba(0, 0, 0, 0.08);
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      --radius: 22px;
      --transition: 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Inter", Arial, sans-serif;
      background: var(--background);
      color: var(--secondary);
      line-height: 1.6;
    }

    img {
      width: 100%;
      display: block;
    }

    header {
      min-height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 2rem;
      background:
        linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),
        url("https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1400&auto=format&fit=crop") center/cover;
      color: var(--light);
    }

    .hero-content {
      max-width: 720px;
    }

    header h1 {
      font-size: clamp(2.8rem, 6vw, 5rem);
      font-weight: 800;
      letter-spacing: -2px;
      margin-bottom: 1rem;
    }

    header p {
      font-size: 1.15rem;
      opacity: 0.92;
      margin-bottom: 2rem;
    }

    .hero-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.95rem 1.8rem;
      border-radius: 999px;
      background: var(--primary);
      color: var(--light);
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    .hero-btn:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
    }

    .booking-section {
      width: min(1200px, 92%);
      margin: -70px auto 4rem;
      position: relative;
      z-index: 10;
    }

    .booking-box {
      background: var(--light);
      padding: 2rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      margin-bottom: 3rem;
    }

    .booking-box h2 {
      color: var(--primary);
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    .form-group {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1rem;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 1rem;
      border-radius: 14px;
      border: 1px solid var(--border);
      background: #fafafa;
      font-size: 1rem;
      color: var(--secondary);
      outline: none;
      transition: var(--transition);
    }

    .form-group input:focus,
    .form-group select:focus {
      border-color: var(--primary);
      background: var(--light);
      box-shadow: 0 0 0 4px rgba(137, 50, 56, 0.12);
    }

    .room-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.8rem;
    }

    .room-card {
      background: var(--light);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: var(--transition);
      position: relative;
    }

    .room-card:hover {
      transform: translateY(-8px);
    }

    .room-card img {
      height: 220px;
      object-fit: cover;
    }

    .room-card .content {
      padding: 1.5rem;
    }

    .room-card h3 {
      color: var(--primary);
      font-size: 1.35rem;
      margin-bottom: 0.7rem;
    }

    .room-card p {
      font-size: 0.95rem;
      margin-bottom: 1.4rem;
    }

    .price {
      font-size: 1.1rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 1.2rem;
    }

    .room-card button {
      width: 100%;
      padding: 0.95rem;
      border: none;
      border-radius: 14px;
      background: var(--primary);
      color: var(--light);
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
    }

    .room-card button:hover {
      background: var(--primary-dark);
    }

    footer {
      background: #1d1d1f;
      color: rgba(255, 255, 255, 0.75);
      text-align: center;
      padding: 1.5rem;
      font-size: 0.95rem;
      margin-top: 5rem;
    }

    @media (max-width: 768px) {
      .booking-section {
        margin-top: -40px;
      }

      .booking-box {
        padding: 1.5rem;
      }

      header {
        min-height: 60vh;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="hero-content">
      <h1>Hotel Nikkas</h1>
      <p>
        Discover modern comfort, elegant rooms, and unforgettable hospitality
        designed for your perfect getaway.
      </p>
      <a href="#rooms" class="hero-btn">Explore Rooms</a>
    </div>
  </header>

  <section class="booking-section">

    <div class="booking-box">
      <h2>Book Your Stay</h2>

      <div class="form-group">
        <input type="date" id="checkin">
        <input type="date" id="checkout">

        <select id="guests">
          <option value="1">1 Guest</option>
          <option value="2">2 Guests</option>
          <option value="3">3 Guests</option>
          <option value="4">4 Guests</option>
        </select>
      </div>
    </div>

    <div class="room-cards" id="rooms">

      <div class="room-card">
        <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop"
          alt="Standard Room">

        <div class="content">
          <h3>Standard Room</h3>

          <p>
            Cozy and affordable with everything you need for a relaxing and
            comfortable stay.
          </p>

          <div class="price">PHP 100 / night</div>

          <button>Book Now</button>
        </div>
      </div>

      <div class="room-card">
        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200&auto=format&fit=crop"
          alt="Deluxe Room">

        <div class="content">
          <h3>Deluxe Room</h3>

          <p>
            Spacious interiors with premium amenities and modern elegance for
            your stay.
          </p>

          <div class="price">PHP 150 / night</div>

          <button>Book Now</button>
        </div>
      </div>

      <div class="room-card">
        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?q=80&w=1200&auto=format&fit=crop"
          alt="Suite">

        <div class="content">
          <h3>Suite</h3>

          <p>
            Luxury accommodation with a private lounge area and elevated comfort.
          </p>

          <div class="price">PHP 220 / night</div>

          <button>Book Now</button>
        </div>
      </div>

      <div class="room-card">
        <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1200&auto=format&fit=crop"
          alt="Cafe and Restaurant">

        <div class="content">
          <h3>Cafe & Restaurant</h3>

          <p>
            Enjoy delicious home-cooked meals, signature drinks, and a warm
            dining atmosphere.
          </p>

          <button>View Menu</button>
        </div>
      </div>

    </div>

  </section>

  <footer>
    © 2025 Hotel Nikkas. All rights reserved.
  </footer>

</body>

</html>