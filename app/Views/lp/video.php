<div class="content d-flex justify-content-center align-items-center">
    <div>
        <div class="">
            <h5 class="font-blue letter-spacing-1 typing-effect" id="TypingText" style="font-size: 30px; font-weight: 900; text-shadow: 2px 2px 2px rgba(255, 255, 255, 0.8);">
                <i class='font-alex' style="font-size:70px;margin-right:5px;">A</i>kasa 
                <i class='font-alex' style="font-size:70px;margin-right:5px;">M</i>impi
            </h5>
        </div>
        <p class="font-blue fade-down" style="font-size: 12px; text-align: center; margin-top: -10px;">Fakultas Ilmu Sosial dan Ilmu Politik, Universitas Brawijaya.</p>
        <a href="<?= base_url('filosofi') ?>" class="btn btn-blue-transparent fade-down-2">Filosofi</a>
    </div>
</div>
<video class="video-background-video" autoplay loop muted>
    <source src="<?= base_url('image/bg-tim.mp4') ?>" type="video/mp4">
    .
</video>

<style>
.video-background {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.video-background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}

.video-background .content {
    position: relative;
    z-index: 1;
    color: white;
    text-align: center;
    padding-top: 20%;
}

.typing-effect {
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    border-right: 3px solid #3652C2;
    animation: typing 3s steps(30) 1s 1 normal both, blink 0.75s step-end infinite;
    padding: 20px 4px 7px 4px;
}

.fade-down {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeDown 1s forwards;
    animation-delay: 4.8s;
}

.fade-down-2 {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeDown 1s forwards;
    animation-delay: 5s;
}

@keyframes fadeDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

@keyframes blink {
    50% {
        border-color: transparent;
    }
}
</style>