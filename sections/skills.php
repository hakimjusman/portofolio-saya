<?php
$skills = [
    [
        'title' => 'React Ecosystem',
        'rank' => 'S-Rank',
        'percentage' => 95
    ],
    [
        'title' => 'TypeScript',
        'rank' => 'A-Rank',
        'percentage' => 88
    ],
    [
        'title' => 'Tailwind CSS / Design Systems',
        'rank' => 'S-Rank',
        'percentage' => 92
    ],
    [
        'title' => 'Node.js / Express',
        'rank' => 'B-Rank',
        'percentage' => 78
    ]
];
?>

<section id="skills" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-sm font-mono font-bold tracking-wider text-brand-blue uppercase">
                Jutsu Teknis
            </h2>
        </div>

        <!-- Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 max-w-5xl mx-auto">
            <?php foreach ($skills as $skill): ?>
                <div class="space-y-2">
                    <div class="flex justify-between items-center font-mono text-xs sm:text-sm">
                        <span class="font-bold text-brand-navy"><?php echo htmlspecialchars($skill['title']); ?></span>
                        <span class="text-brand-blue font-semibold"><?php echo htmlspecialchars($skill['rank']); ?></span>
                    </div>
                    <!-- Progress Bar -->
                    <div class="w-full h-2.5 bg-gray-200 rounded-none overflow-hidden">
                        <div class="h-full bg-brand-blue transition-all duration-1000 ease-out" 
                             style="width: <?php echo $skill['percentage']; ?>%;">
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