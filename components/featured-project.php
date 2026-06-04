<?php
$projects = [
  [
    'title' => 'Megabet: E-Gaming Platform',
    'description' => 'MEGABET is a PAGCOR-licensed online gaming casino.',
    'link' => 'https://megabet-paradise.com',
    'button' => 'View Project',
    'icon' => 'fa-gamepad',
    'project_type' => 'E-Gaming Project'
  ],
  [
    'title' => 'ZionTech Official Website',
    'description' => 'Online Customer Inquiry for ZionTech',
    'link' => 'http://zion-tech.site',
    'button' => 'View Project',
    'icon' => 'fa-globe',
    'project_type' => 'NextJS Project'
  ],
  [
    'title' => 'Hotel Nikkas OBS',
    'description' => 'Booking system for Hotel Nikkas',
    'link' => './sub-projects/hotel-nikkas.php',
    'button' => 'View Platform',
    'icon' => 'fa-hotel',
    'project_type' => 'Booking System Project'
  ],
  [
    'title' => 'SHADY: Smart Helmet',
    'description' => 'A smart helmet with voice recognition, intelligent sensors, and automation features designed to improve rider safety and accessibility.',
    'link' => './project-shady',
    'button' => 'Explore Project',
    'icon' => 'fa-helmet-safety',
    'project_type' => 'Capstone Project'
  ],
  [
    'title' => 'WorkerHunt',
    'description' => 'A modern hiring platform connecting Filipinos with trusted local workers through a streamlined and reliable experience.',
    'link' => './project-workerhunt',
    'button' => 'View Platform',
    'icon' => 'fa-briefcase',
    'project_type' => 'First web project'
  ],
];
?>

<section class="relative pt-16 md:py-24 overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-[#f8f6f1] via-white to-[#f2ede4]"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-6">

    <div class="text-center mb-14">
      <h2 class="mt-6 text-4xl md:text-6xl font-black tracking-tight text-[#2d2d2d]">
        Featured
        <span class="text-[#727b46]">Projects</span>
      </h2>

      <p class="mt-6 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed text-gray-600">
        A collection of systems, platforms, and products focused on automation, real-world usability, and scalable
        architecture.
      </p>
    </div>

    <div class="flex overflow-x-auto gap-6 pb-4 sm:hidden no-scrollbar">
      <?php foreach ($projects as $project): ?>
        <article
          class="group relative overflow-hidden min-w-[320px] rounded-[2rem] bg-white/70 backdrop-blur-xl border border-white/40 shadow-[0_10px_30px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-all duration-500">

          <div
            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-[#727b46]/10 via-transparent to-transparent">
          </div>

          <div class="relative z-10 p-7">

            <div class="w-16 h-16 rounded-2xl bg-[#727b46]/10 flex items-center justify-center">
              <i class="fa-solid <?= $project['icon'] ?> text-[#727b46] text-2xl"></i>
            </div>

            <h3 class="mt-6 text-2xl font-black tracking-tight text-[#2d2d2d]">
              <?= htmlspecialchars($project['title']) ?>
            </h3>

            <p class="mt-4 text-sm leading-relaxed text-gray-600">
              <?= htmlspecialchars($project['description']) ?>
            </p>

            <div class="mt-8">
              <a href="<?= htmlspecialchars($project['link']) ?>"
                class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-[#2d2d2d] hover:bg-black text-white font-semibold transition-all duration-300">

                <?= htmlspecialchars($project['button']) ?>

                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>

          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="hidden sm:grid sm:grid-cols-2 xl:grid-cols-2 gap-8">
      <?php foreach ($projects as $project): ?>
        <article
          class="group relative overflow-hidden rounded-[2.5rem] bg-white/70 backdrop-blur-xl border border-white/40 shadow-[0_10px_30px_rgba(0,0,0,0.05)] hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] transition-all duration-500">
          <div
            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-[#727b46]/10 via-transparent to-transparent">
          </div>
          <div class="relative z-10 p-10">
            <div class="flex items-start justify-between gap-6">
              <div class="w-20 h-20 rounded-3xl bg-[#727b46]/10 flex items-center justify-center shrink-0">
                <i class="fa-solid <?= $project['icon'] ?> text-[#727b46] text-3xl"></i>
              </div>
              <div class="w-3 h-3 rounded-full bg-[#727b46]/30 animate-pulse mt-3"></div>
            </div>
            <h3 class="mt-8 text-4xl font-black tracking-tight leading-tight text-[#2d2d2d]">
              <?= htmlspecialchars($project['title']) ?>
            </h3>
            <p class="mt-5 text-base leading-relaxed text-gray-600 max-w-2xl">
              <?= htmlspecialchars($project['description']) ?>
            </p>
            <div class="mt-10 flex items-center justify-between">
              <div class="flex items-center gap-2 text-sm font-semibold text-[#727b46]">
                <div class="w-2 h-2 rounded-full bg-[#727b46]"></div>
                <?= htmlspecialchars($project['project_type']) ?>
              </div>
              <a href="<?= htmlspecialchars($project['link']) ?>"
                class="group/button inline-flex items-center gap-3 px-7 py-4 rounded-2xl bg-[#2d2d2d] hover:bg-black text-white font-semibold transition-all duration-300">
                <?= htmlspecialchars($project['button']) ?>
                <div
                  class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center group-hover/button:translate-x-1 transition-all duration-300">
                  <i class="fa-solid fa-arrow-right text-sm"></i>
                </div>
              </a>
            </div>
          </div>

        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>