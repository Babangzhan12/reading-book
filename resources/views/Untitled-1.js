Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
])

Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => 3,
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, debitis.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus repellat hic et ratione aliquam odit aliquid! Temporibus rerum deserunt quo beatae voluptas voluptatum! Sunt, error! Delectus, sint quia. Sit, incidunt!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione odit reprehenderit placeat incidunt fugit quia natus ab asperiores consequuntur eos repudiandae totam minus distinctio enim tenetur ea, itaque pariatur mollitia optio facere illum? Quidem ut quia quisquam ratione ad?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo asperiores voluptatum unde corrupti. Nobis tempore sint dolores id enim ad ut quaerat quia earum in rem soluta et, doloremque architecto animi quos repudiandae rerum sapiente similique fugit laudantium accusantium. Itaque laudantium magnam iste enim architecto ea quo officiis vitae, distinctio fugiat odit nisi, commodi doloribus quidem. Reprehenderit, hic harum.</p>'
])
