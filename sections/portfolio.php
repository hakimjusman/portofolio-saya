<?php
$projects = [
    [
        'title' => 'Chakra Analytics UI',
        'description' => 'Dashboard berperforma tinggi untuk memantau beban server secara real-time.',
        'tags' => ['React', 'D3.js'],
        'image' => 'assets/images/project-3.jpg'
    ],
    [
        'title' => 'Silent Commerce',
        'description' => 'Storefront e-commerce headless yang sangat cepat dengan fokus pada konversi.',
        'tags' => ['Next.js', 'Stripe'],
        'image' => 'assets/images/project-2.jpg'
    ],
    [
        'title' => 'Kunai Design System',
        'description' => 'UI kit komprehensif yang dibangun untuk skalabilitas dan konsistensi tim.',
        'tags' => ['Figma', 'Storybook'],
        'image' => 'assets/images/project-1.jpg'
    ]
];
?>

<section id="portfolio" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-sm font-mono font-bold tracking-wider text-brand-blue uppercase">
                Gulungan Pencapaian
            </h2>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div class="bg-white border border-gray-200/80 rounded-sm overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300 group">
                    <div class="relative h-48 sm:h-56 overflow-hidden bg-gray-100">
                        <img src="<?php echo $project['image']; ?>" 
                             alt="<?php echo htmlspecialchars($project['title']); ?>" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="font-mono font-bold text-base text-brand-navy mb-2">
                                <?php echo htmlspecialchars($project['title']); ?>
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                <?php echo htmlspecialchars($project['description']); ?>
                            </p>
                        </div>

                        <!-- Tech Tags -->
                        <div class="flex flex-wrap gap-2 font-mono text-[11px] pt-2">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="px-2.5 py-1 bg-gray-100 text-gray-600 rounded-sm">
                                    <?php echo htmlspecialchars($tag); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<div class="w-full flex justify-center py-4">
    <div class="w-16 h-[1px] bg-gray-300"></div>
</div>