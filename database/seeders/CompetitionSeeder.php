<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions')->insert([
            'id' => "1",
            'title' => "RESEARCH MINDEDNESS",
            'picture' => "RESEARCH MINDEDNESS.png",
            'description' => "Research Mindedness (Remind) merupakan mata lomba yang diinisiasi oleh Program Studi Ilmu Komunikasi dan berada di bawah naungan Epicentrum Universitas Padjadjaran. Mata lomba Remind menggabungkan riset, solusi kreatif, dan perencanaan strategis untuk menemukan terobosan baru dalam pemecahan masalah nasional. Output dari perlombaan ini adalah laporan penelitian, infografis, serta video kreatif sehingga peserta mampu mengemukakan data-data riset potensial yang kemudian dikemas kreatif melalui media digital. Diharapkan dengan diadakannya Remind dapat meningkatkan kemampuan mahasiswa dalam menganalisis permasalahan dengan cara berpikir kritis, strategis, dan kreatif.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "2",
            'title' => "IDEATION",
            'picture' => "IDEATION.png",
            'description' => "Praktisi komunikasi strategis berkontribusi besar terhadap pemecahan isu-isu di masyarakat. Ideation hadir bagi para calon praktisi komunikasi strategis, khususnya mahasiswa D3/S1 sederajat yang ingin berkontribusi dalam menyelesaikan permasalahan dari perspektif ilmu komunikasi. Bukan hanya itu, Ideation membantu pesertanya dalam melatih kemampuan riset, analisis, serta berpikir kreatif melalui perancangan kampanye digital dengan tujuan untuk menyelesaikan masalah terkait, dalam bentuk proposal perencanaan, presentasi strategi, serta creative content.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "3",
            'title' => "TELL A VISION",
            'picture' => "TELL A VISION.png",
            'description' => "Sebuah lomba yang menekankan kreativitas insan komunikasi pada bidang pertelevisian. Lomba ini berupa pembuatan proposal acara televisi non-drama. Bentuk acara non-drama dapat berupa talk show, variety show, dan reality show. Peserta lomba diharapkan membuat proposal lengkap yang meliputi: latar belakang, tujuan, detail teknis lengkap, struktur acara, dan sebagainya. Peserta lomba juga diharapkan menciptakan preview atau teaser pendek dari proposal acara dengan durasi 1–5 menit.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "4",
            'title' => "MEDIATION",
            'picture' => "MEDIATION PNG.png",
            'description' => "Clear, catchy, concise merupakan 3 aspek yang kami anggap perlu pada seorang content creator. Mediation merupakan sebuah kompetisi yang berfokus pada kreativitas dalam pembuatan konten media itu sendiri. Kami meyakini bahwa saat ini content creator adalah salah satu pekerjaan yang sedang berkembang di Indonesia. Namun, hal tersebut belum sejalan dengan perkembangan dan aspek-aspek yang seharusnya ada di dalam sebuah konten itu sendiri. Kami berharap, dalam rangkaian Mediation 2021 ini kami dapat membantu untuk saling berbagi dan membangun terkait dengan sebuah konten itu sendiri. Tahun ini, Mediation hadir dengan 3 hasil akhir yang harus dibuat oleh peserta, yaitu sebuah video, audio dan poster digital terkait dengan permasalahan yang ada.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "5",
            'title' => "LIBLICIOUS",
            'picture' => "LIBLICIOUS.png",
            'description' => "Liblicious merupakan salah satu mata lomba yang dinaungi oleh Epicentrum Fikom Unpad. Berfokus pada pembuatan program dan produk kreatif yang dituangkan dalam proposal secara sistematis, terencana, serta menggunakan perspektif spesialis informasi atau komunitas literasi dalam pemecahan masalahnya. Liblicious mengajak seluruh mahasiswa di Indonesia untuk bergabung dan menuangkan inovasi serta ide kreatifnya dalam upaya menuntaskan isu yang diangkat oleh Liblicious pada tahun ini.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "6",
            'title' => "PARADE JURNALISTIK",
            'picture' => "PARADE JURNALISTIK.png",
            'description' => "Kompetisi Parade Jurnalistik dapat diikuti oleh mahasiswa S1/Diploma sederajat. Peserta kompetisi ditantang untuk membuat produk jurnalistik yang sesuai dengan tema yang diusung. Kompetisi ini menitikberatkan pada isu-isu aktual yang dilihat dari kacamata ilmu jurnalistik dengan output yang diharapkan memiliki manfaat khususnya untuk peserta Parade Jurnalistik dan masyarakat secara umum. Produk jurnalistik sebagai output kompetisi dimaksudkan agar peserta dapat menyelaraskan kedalaman fakta dan cara pengemasan yang menarik. Berkaca pada situasi terkini, Parade Jurnalistik tahun ini memutuskan Video Diskusi sebagai output dan kemudian tahapan lomba selanjutnya akan disesuaikan oleh arahan panitia. Kompetisi ini mengundang seluruh mahasiswa dari berbagai wilayah di Indonesia untuk bergabung dan mengirimkan karya terbaiknya. Karya yang telah dikirim oleh peserta akan dinilai oleh juri yang memiliki kompetensi yang relevan, seperti dari pengamat media, praktisi media, dan akademisi. Parade Jurnalistik ditutup dengan talk show dengan tema yang sejalan dengan tema besar kompetisi. Melalui talk show ini, peserta akan diajak untuk berdiskusi dan mendalami isu yang diangkat. Talk show akan menghadirkan pembicara yang merupakan akademisi, praktisi, dan wartawan berpengalaman serta kompeten di bidangnya.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('competitions')->insert([
            'id' => "7",
            'title' => "THE 9TH PADJADJARAN PUBLIC RELATIONS FESTIVAL",
            'picture' => "THE 8th PPRF.png",
            'description' => "Padjadjaran Public Relations Fair merupakan ajang kompetisi mahasiswa komunikasi tingkat nasional yang diselenggarakan oleh Hima Humas Fikom Unpad dan telah diselenggarakan selama 8 tahun berturut-turut. Tahun ini, PPRF berada di bawah naungan Epicentrum Unpad bersama dengan 6 mata lomba lainnya. PPRF memiliki 2 cabang mata lomba sebagai berikut:
            a. OlymPRday OlymPRday merupakan salah satu mata lomba dari The 9th PPRF yang berfokus pada pengerjaan riset dan penyusunan program yang sistematis, terencana, serta kreatif melalui strategic planning PR sebagai bentuk penyelesaian masalah yang hasilnya adalah sebuah integrated campaign program proposal sebagai jawaban atas permasalahan pihak terkait.
            b. PRSF (Public Relations Student Forum) PRSF merupakan salah satu cabang lomba dari The 9th PPRF berbentuk diskusi panel yang menekankan pada perspektif public relations. Para peserta yang disebut sebagai delegates (delegasi) harus menggunakan kemampuan berbahasa Inggris, analisis situasi, public speaking, problem solving, lobi dan negosiasi untuk mengusulkan solusi terbaik berdasarkan perspektif public relations untuk menjawab permasalahan yang diangkat. Prosedur PRSF terbagi menjadi dua sesi, yakni formal session dan informal session. Tujuan dari PRSF adalah berupaya untuk menghasilkan draft resolution yang berisikan solusi terhadap masalah yang menjadi subtema dalam PRSF.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
