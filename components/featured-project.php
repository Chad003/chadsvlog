<?php
$projects = [
  [
    'title' => 'SHADY: Smart Helmet',
    'description' => 'A smart helmet with voice recognition and sensor automation for safer, more efficient rides.',
    'link' => './project-shady',
    'button' => 'View Full Project'
  ],
  [
    'title' => 'WorkerHunt',
    'description' => 'WorkerHunt is a platform that connects Filipinos with trusted local workers. WorkerHunt makes it easy to find and hire reliable people nearby—quickly, conveniently, and with confidence.',
    'link' => './project-workerhunt',
    'button' => 'View Demo'
  ],
];
?>
<div class="-mx-6 sm:mx-0">
  <section class="bg-[#f4f1ec] py-5 px-4 sm:px-8 rounded-xl mt-2">
    <h2 class="text-2xl font-semibold text-[#727b46] mb-6 text-center">Featured Projects</h2>
    <div class="flex overflow-x-auto gap-4 sm:hidden no-scrollbar pb-2">
      <?php foreach ($projects as $project): ?>
        <div
          class="flex flex-col justify-between bg-white rounded-xl shadow-md p-5 border border-[#d1bfa3]/40 hover:shadow-lg transition-all duration-300 flex-shrink-0 w-72">
          <div>
            <h3 class="text-lg font-semibold text-[#727b46] mb-2"><?= htmlspecialchars($project['title']) ?></h3>
            <p class="text-sm text-gray-700 mb-6"><?= htmlspecialchars($project['description']) ?></p>
          </div>
          <div class="mt-auto pt-3">
            <a href="<?= htmlspecialchars($project['link']) ?>"
              class="inline-block px-4 py-2 bg-[#727b46] text-white rounded-full hover:bg-[#88785f] transition-all duration-200">
              <?= htmlspecialchars($project['button']) ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="hidden sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($projects as $project): ?>
        <div
          class="flex flex-col justify-between bg-white rounded-xl shadow-md p-6 border border-[#d1bfa3]/40 hover:shadow-lg transition-all duration-300">
          <div>
            <h3 class="text-lg font-semibold text-[#727b46] mb-2"><?= htmlspecialchars($project['title']) ?></h3>
            <p class="text-sm text-gray-700 mb-6"><?= htmlspecialchars($project['description']) ?></p>
          </div>
          <div class="mt-auto pt-3">
            <a href="<?= htmlspecialchars($project['link']) ?>"
              class="inline-block px-4 py-2 bg-[#727b46] text-white rounded-full hover:bg-[#88785f] transition-all duration-200">
              <?= htmlspecialchars($project['button']) ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>