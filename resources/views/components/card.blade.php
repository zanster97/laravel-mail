<style>
    body {
        background: #0f172a;
    }

    /* Card */
    .lux-card {
        border-radius: 20px;
        overflow: hidden;
        background: #1e293b;
        box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        transition: 0.4s ease;
        color: #fff;
        position: relative;
    }

    .lux-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 30px 80px rgba(0,0,0,0.8);
    }

    /* Image */
    .card-img {
        height: 180px;
        overflow: hidden;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .lux-card:hover img {
        transform: scale(1.1);
    }

    /* Body */
    .card-body {
        padding: 20px;
    }

    /* Title */
    .lux-title {
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Text */
    .lux-text {
        font-size: 14px;
        color: #cbd5f5;
    }

    /* Button */
    .lux-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 18px;
        border-radius: 50px;
        text-decoration: none;
        color: #fff;
        background: linear-gradient(45deg, #00c6ff, #0072ff);
        transition: 0.3s;
    }

    .lux-btn:hover {
        transform: scale(1.08);
        box-shadow: 0 10px 25px rgba(0,114,255,0.6);
    }

    /* Glow line */
    .lux-card::after {
        content: "";
        position: absolute;
        height: 3px;
        width: 0%;
        bottom: 0;
        left: 0;
        background: linear-gradient(90deg, #00c6ff, #0072ff);
        transition: 0.4s;
    }

    .lux-card:hover::after {
        width: 100%;
    }
</style>
<div class="col-lg-3 col-md-6 mb-4">
    <div class="lux-card h-100">

        {{-- Image --}}
        <div class="card-img">
            @isset($image)
            {{ $image }}
            @endisset
        </div>

        {{-- Content --}}
        <div class="card-body text-center">
            <h5 class="lux-title">
                @isset($title)
                {{ $title }}
                @endisset
            </h5>

            <p class="lux-text">
                @isset($slot)
                {{ $slot }}
                @endisset
            </p>

            <a href="#" class="lux-btn">Explore →</a>
        </div>

    </div>
</div>
