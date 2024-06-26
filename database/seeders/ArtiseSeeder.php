<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artise;
use Illuminate\Support\Facades\DB;

class ArtiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Artise::factory()
        //     ->count(50)
        //     ->create();
        $artise=
        [
          [
            "name"=> "Dan Sanchez",
            "country"=> "",
            "genre"=> "corrido",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5f2bbbd2b585e43f0eb204a2",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745f2bbbd2b585e43f0eb204a2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785f2bbbd2b585e43f0eb204a2",
            "spotify_id"=> "1yPvnL2XGGehNiOGWzcAAG"
          ],
          [
            "name"=> "Steve Earle",
            "country"=> "",
            "genre"=> "alternative country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2d8477e378b868e9d4e60d5b",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742d8477e378b868e9d4e60d5b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782d8477e378b868e9d4e60d5b",
            "spotify_id"=> "2UBTfUoLI07iRqGeUrwhZh"
          ],
          [
            "name"=> "Raj Shekhar",
            "country"=> "",
            "genre"=> "modern bollywood",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcd3f6cc1ca9674499a199c67",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cd3f6cc1ca9674499a199c67",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cd3f6cc1ca9674499a199c67",
            "spotify_id"=> "2DFCHTDIA0t638a4mm37dK"
          ],
          [
            "name"=> "STRFKR",
            "country"=> "",
            "genre"=> "indie rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb03db121cc01446696be24014",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517403db121cc01446696be24014",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17803db121cc01446696be24014",
            "spotify_id"=> "2Tz1DTzVJ5Gyh8ZwVr6ekU"
          ],
          [
            "name"=> "Shankar-Ehsaan-Loy",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3db0499a689aa9b4a47ebba3",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743db0499a689aa9b4a47ebba3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783db0499a689aa9b4a47ebba3",
            "spotify_id"=> "0L5GV6LN8SWWUWIdBbTLTZ"
          ],
          [
            "name"=> "Seventeen",
            "country"=> "",
            "genre"=> "indonesian pop rock",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273687ee7cccc410bb76f8bad42",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02687ee7cccc410bb76f8bad42",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851687ee7cccc410bb76f8bad42",
            "spotify_id"=> "5uUb3J6HqLhBWwzuh84LUZ"
          ],
          [
            "name"=> "Snakehips",
            "country"=> "",
            "genre"=> "electropop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7f733bafdc404730f821de26",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747f733bafdc404730f821de26",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787f733bafdc404730f821de26",
            "spotify_id"=> "2FwJwEswyIUAljqgjNSHgP"
          ],
          [
            "name"=> "The B-52's",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb85c1d77e63082caf426f6d59",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517485c1d77e63082caf426f6d59",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17885c1d77e63082caf426f6d59",
            "spotify_id"=> "3gdbcIdNypBsYNu3iiCjtN"
          ],
          [
            "name"=> "Sarcastic Sounds",
            "country"=> "",
            "genre"=> "lo-fi chill",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb91fd0bccbc7c68bce634d9fd",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517491fd0bccbc7c68bce634d9fd",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17891fd0bccbc7c68bce634d9fd",
            "spotify_id"=> "1bq8rqNnfrojn0OSAfeNXJ"
          ],
          [
            "name"=> "JEON SOMI",
            "country"=> "",
            "genre"=> "k-pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8acf72a6c3da24a6483255fa",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748acf72a6c3da24a6483255fa",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788acf72a6c3da24a6483255fa",
            "spotify_id"=> "7zYj9S9SdIunYCfSm7vzAR"
          ],
          [
            "name"=> "Michael Salvatori",
            "country"=> "",
            "genre"=> "video game music",
            "bg_img"=> "https://i.scdn.co/image/79a65b6d2f03098df7f7a39ea481a93033c71e5a",
            "md_img"=> "https://i.scdn.co/image/bff3e3e471396549a0e9168682744550c6b7e4bc",
            "sm_img"=> "https://i.scdn.co/image/95f8c92ae6c0c196d6104130d526491f35d68bf9",
            "spotify_id"=> "7Ir0wjCeuhkHUyPAfNJi2X"
          ],
          [
            "name"=> "Royal & the Serpent",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebce8b127d23f4bc04d7195e31",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ce8b127d23f4bc04d7195e31",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ce8b127d23f4bc04d7195e31",
            "spotify_id"=> "64EHXDoln95lnccszdPum0"
          ],
          [
            "name"=> "Sugar Ray",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebff43c5735517a662439d0afe",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ff43c5735517a662439d0afe",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ff43c5735517a662439d0afe",
            "spotify_id"=> "4uN3DsfENc7dp0OLO0FEIb"
          ],
          [
            "name"=> "Bob Sinclar",
            "country"=> "",
            "genre"=> "disco house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb66120280e076f05720f3ed33",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517466120280e076f05720f3ed33",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17866120280e076f05720f3ed33",
            "spotify_id"=> "5YFS41yoX0YuFY39fq21oN"
          ],
          [
            "name"=> "Shady Moon",
            "country"=> "",
            "genre"=> "aesthetic rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc839b1040efda018178ce36d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c839b1040efda018178ce36d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c839b1040efda018178ce36d",
            "spotify_id"=> "2urobxol2zYHXOUJXDh8n4"
          ],
          [
            "name"=> "Ambi Nature Sounds",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb50acc73890728266cccedd8b",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517450acc73890728266cccedd8b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17850acc73890728266cccedd8b",
            "spotify_id"=> "1iUPzeS16C6LDSU7bxswGC"
          ],
          [
            "name"=> "Sean Stemaly",
            "country"=> "",
            "genre"=> "modern country pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb33823ba6121b46811e6cb849",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517433823ba6121b46811e6cb849",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17833823ba6121b46811e6cb849",
            "spotify_id"=> "2dZ1l4hWgtbMS0N5T9Oalb"
          ],
          [
            "name"=> "Steffany Gretzinger",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb01f9589a53453c6a02563166",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517401f9589a53453c6a02563166",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17801f9589a53453c6a02563166",
            "spotify_id"=> "2akNRvGNB400IDDUMr1PHW"
          ],
          [
            "name"=> "Sovereign Grace Music",
            "country"=> "",
            "genre"=> "roots worship",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb63c731b1f471f11999c7b2d3",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517463c731b1f471f11999c7b2d3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17863c731b1f471f11999c7b2d3",
            "spotify_id"=> "6MYKRhEIKscR8qdGlvpk9y"
          ],
          [
            "name"=> "Anthony Santos",
            "country"=> "",
            "genre"=> "bachata",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9a3da11cc3d3bc7a500c18dc",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749a3da11cc3d3bc7a500c18dc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789a3da11cc3d3bc7a500c18dc",
            "spotify_id"=> "06TVTkMAOR935MhkjX0i2A"
          ],
          [
            "name"=> "Rina Sawayama",
            "country"=> "",
            "genre"=> "art pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8cb645e0a77bf015feda7fb9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748cb645e0a77bf015feda7fb9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788cb645e0a77bf015feda7fb9",
            "spotify_id"=> "2KEqzdPS7M5YwGmiuPTdr5"
          ],
          [
            "name"=> "Javier Rosas Y Su Artillería Pesada",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0922a8d21a9e81eef42bf7e6",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740922a8d21a9e81eef42bf7e6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780922a8d21a9e81eef42bf7e6",
            "spotify_id"=> "5FAAR1LqXQp0HbgVfQ8ZWE"
          ],
          [
            "name"=> "Silvestre Dangond",
            "country"=> "",
            "genre"=> "colombian pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd558cb38a9f1802741dbdab1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d558cb38a9f1802741dbdab1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d558cb38a9f1802741dbdab1",
            "spotify_id"=> "3OcvS8PzSGYMBvLdzY6g3e"
          ],
          [
            "name"=> "Crosby, Stills & Nash",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/b9c086901cca94cab20e8fcdc35bd79c7b39526a",
            "md_img"=> "https://i.scdn.co/image/7d26d42a2969e495d8917b077501e02fca5da5e0",
            "sm_img"=> "https://i.scdn.co/image/8ee7e65ec865603c08b0f6af1eeb0dc944d7872d",
            "spotify_id"=> "2pdvghEHZJtgSXZ7cvNLou"
          ],
          [
            "name"=> "Shilpi Raj",
            "country"=> "",
            "genre"=> "bhojpuri pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb34b1b490b6090336abbae4af",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517434b1b490b6090336abbae4af",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17834b1b490b6090336abbae4af",
            "spotify_id"=> "12HVwm3qt6gOkKhDoj00m4"
          ],
          [
            "name"=> "Twisted Sister",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/758604f17b98e5db650adeebf9cf8cb55feda0f0",
            "md_img"=> "https://i.scdn.co/image/7d5d09551319e852cbe87e2520afa88d5496f017",
            "sm_img"=> "https://i.scdn.co/image/977c9a9db6ffe1235c2dae225ee3df5492acddc3",
            "spotify_id"=> "7b85ve82Sh36a3UAx74wut"
          ],
          [
            "name"=> "SHINee",
            "country"=> "",
            "genre"=> "k-pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe0001b1abdae41d669a446b7",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e0001b1abdae41d669a446b7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e0001b1abdae41d669a446b7",
            "spotify_id"=> "2hRQKC0gqlZGPrmUKbcchR"
          ],
          [
            "name"=> "Scarface",
            "country"=> "",
            "genre"=> "conscious hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebae0c2f874279460a00c476c6",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ae0c2f874279460a00c476c6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ae0c2f874279460a00c476c6",
            "spotify_id"=> "19KwjzvIL92r29IINtlPNP"
          ],
          [
            "name"=> "Lennon Stella",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd28e3bcc85f25f2814aa3830",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d28e3bcc85f25f2814aa3830",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d28e3bcc85f25f2814aa3830",
            "spotify_id"=> "1cZQSpDsxgKIX2yW5OR9Ot"
          ],
          [
            "name"=> "Slow Eyes",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9a2fbef9110d1da2d2037029",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749a2fbef9110d1da2d2037029",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789a2fbef9110d1da2d2037029",
            "spotify_id"=> "1amitm7OGgCQZNowYB9nvd"
          ],
          [
            "name"=> "SNOW WIFE",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb31781eb29123add89071a607",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517431781eb29123add89071a607",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17831781eb29123add89071a607",
            "spotify_id"=> "7CV3dQkhJB2dEqb85ICD33"
          ],
          [
            "name"=> "Silverstein",
            "country"=> "",
            "genre"=> "canadian post-hardcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd0bbbc3c7f791a436b51231e",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d0bbbc3c7f791a436b51231e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d0bbbc3c7f791a436b51231e",
            "spotify_id"=> "1Tsag5J854qxeOo2apszug"
          ],
          [
            "name"=> "Steven Rodriguez",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb40060b8b037772ea28f4b3b6",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517440060b8b037772ea28f4b3b6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17840060b8b037772ea28f4b3b6",
            "spotify_id"=> "2a84LFOuPFQX3qGB26eu9O"
          ],
          [
            "name"=> "Slow Rising Hope",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4a9c3322aa0cbeaf7ca65759",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744a9c3322aa0cbeaf7ca65759",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784a9c3322aa0cbeaf7ca65759",
            "spotify_id"=> "6PG2xcOoZhLtbLAINQdys6"
          ],
          [
            "name"=> "Ski Aggu",
            "country"=> "",
            "genre"=> "german hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb210beab483c257dd2f2d7579",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174210beab483c257dd2f2d7579",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178210beab483c257dd2f2d7579",
            "spotify_id"=> "6CP5wWvO8oIxedESJNCN4H"
          ],
          [
            "name"=> "July Sunrise",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb7cd7f07ae3e2d827887b5f2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b7cd7f07ae3e2d827887b5f2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b7cd7f07ae3e2d827887b5f2",
            "spotify_id"=> "2i0yWCXBGhBWuT0qnM3tmE"
          ],
          [
            "name"=> "Sonny Fodera",
            "country"=> "",
            "genre"=> "house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc99ebbf7a4448ab0686950c7",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c99ebbf7a4448ab0686950c7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c99ebbf7a4448ab0686950c7",
            "spotify_id"=> "39B7ChWwrWDs7zXlsu3MoP"
          ],
          [
            "name"=> "StaySolidRocky",
            "country"=> "",
            "genre"=> "melodic rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd6b4cd036a38de239c1e902d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d6b4cd036a38de239c1e902d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d6b4cd036a38de239c1e902d",
            "spotify_id"=> "1XLWox9w1Yvbodui0SRhUQ"
          ],
          [
            "name"=> "Los Alegres de la Sierra",
            "country"=> "",
            "genre"=> "chilena",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb249bcd36e498b25fc4ddefd4",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174249bcd36e498b25fc4ddefd4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178249bcd36e498b25fc4ddefd4",
            "spotify_id"=> "4Yfe8uXcl5PYwknQ4OMZIP"
          ],
          [
            "name"=> "Shenandoah",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba86820284b800165b15b75b2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a86820284b800165b15b75b2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a86820284b800165b15b75b2",
            "spotify_id"=> "36eTeLNx8ErucrEyRm6JOo"
          ],
          [
            "name"=> "Steppenwolf",
            "country"=> "",
            "genre"=> "acid rock",
            "bg_img"=> "https://i.scdn.co/image/8208d86ed91c50bc9ffbf8f436c6e323e6bda480",
            "md_img"=> "https://i.scdn.co/image/e7f03ec842ea8390a79b577557751a96502512a6",
            "sm_img"=> "https://i.scdn.co/image/ff45518ba53ce6709c177b946a36938619f10aec",
            "spotify_id"=> "1WRM9i067hd2ujxxi8FI3m"
          ],
          [
            "name"=> "Thaman S",
            "country"=> "",
            "genre"=> "new beat",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1edc6d40afbea5426d0cfe0f",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741edc6d40afbea5426d0cfe0f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781edc6d40afbea5426d0cfe0f",
            "spotify_id"=> "2FgHPfRprDaylrSRVf1UlN"
          ],
          [
            "name"=> "Get Scared",
            "country"=> "",
            "genre"=> "metalcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0aaa9d35794ed0470d2f5072",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740aaa9d35794ed0470d2f5072",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780aaa9d35794ed0470d2f5072",
            "spotify_id"=> "5r9uIJCoquVtEkCkvcn8Ez"
          ],
          [
            "name"=> "Sanctus Real",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd9ef3b1af854c3f4365cb58f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d9ef3b1af854c3f4365cb58f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d9ef3b1af854c3f4365cb58f",
            "spotify_id"=> "6QgOGgahvXBHEEzpjbDsOj"
          ],
          [
            "name"=> "38 Special",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/30a387423ed24633753a0c72bf5d57809c8cba9d",
            "md_img"=> "https://i.scdn.co/image/30b95555f6ada5b6ad259d865e5bbf791534999b",
            "sm_img"=> "https://i.scdn.co/image/bed18f3c8d0284f2ae6d46754f35379aa4504cf6",
            "spotify_id"=> "3zXw2Eh96iTT51pytzHdZi"
          ],
          [
            "name"=> "Seezyn",
            "country"=> "",
            "genre"=> "cincinnati rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb58cdaea64726b87bec0d176b",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517458cdaea64726b87bec0d176b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17858cdaea64726b87bec0d176b",
            "spotify_id"=> "1jIVEaq8GmqMYb8nFNAZgb"
          ],
          [
            "name"=> "The Struts",
            "country"=> "",
            "genre"=> "glam rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe8099ddd876f6b4eeeb91486",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e8099ddd876f6b4eeeb91486",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e8099ddd876f6b4eeeb91486",
            "spotify_id"=> "3lDpdwM8KILepMHqBWUhIA"
          ],
          [
            "name"=> "Spoon",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0973020fd7390db68e5ebf1c",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740973020fd7390db68e5ebf1c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780973020fd7390db68e5ebf1c",
            "spotify_id"=> "0K1q0nXQ8is36PzOKAMbNe"
          ],
          [
            "name"=> "Softwilly",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6e3606b67863bb7c1194ad87",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746e3606b67863bb7c1194ad87",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786e3606b67863bb7c1194ad87",
            "spotify_id"=> "0fAEWMlRd4yiJBT2usaqqc"
          ],
          [
            "name"=> "City Spud",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "",
            "md_img"=> "",
            "sm_img"=> "",
            "spotify_id"=> "3L2SIGZah4QZSvN4wC8rHl"
          ],
          [
            "name"=> "Smokey Robinson & The Miracles",
            "country"=> "",
            "genre"=> "classic soul",
            "bg_img"=> "https://i.scdn.co/image/6e1b939d6fcf5acf070fb266729458171eb46edf",
            "md_img"=> "https://i.scdn.co/image/002d7d3a611aaf4a1aa75cdb3b06e186f7698242",
            "sm_img"=> "https://i.scdn.co/image/176ab9f17830fa2b90e531feceac0eedf59139b8",
            "spotify_id"=> "6TKOZZDd5uV5KnyC5G4MUt"
          ],
          [
            "name"=> "Stefflon Don",
            "country"=> "",
            "genre"=> "dancehall",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1a18862abdc55c10a7069461",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741a18862abdc55c10a7069461",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781a18862abdc55c10a7069461",
            "spotify_id"=> "2ExGrw6XpbtUAJHTLtUXUD"
          ],
          [
            "name"=> "Soothly",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb03153296f263cd0dea6d4ae3",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517403153296f263cd0dea6d4ae3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17803153296f263cd0dea6d4ae3",
            "spotify_id"=> "02HfWwVkZpAEWY9RwUBTyQ"
          ],
          [
            "name"=> "Menahan Street Band",
            "country"=> "",
            "genre"=> "brass band",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb46dc0fd03399b8a9dfed982d",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517446dc0fd03399b8a9dfed982d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17846dc0fd03399b8a9dfed982d",
            "spotify_id"=> "1PryMSya1JnSAlcwYawCxp"
          ],
          [
            "name"=> "Aaron Smith",
            "country"=> "",
            "genre"=> "chicago house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4e3b9e4559d3cff50dcc69cf",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744e3b9e4559d3cff50dcc69cf",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784e3b9e4559d3cff50dcc69cf",
            "spotify_id"=> "77qukKzmdI5BeMBR7WGUrN"
          ],
          [
            "name"=> "Slug",
            "country"=> "",
            "genre"=> "abstract hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6b823b5e43b6eea330a380a9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746b823b5e43b6eea330a380a9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786b823b5e43b6eea330a380a9",
            "spotify_id"=> "6Lz3nv3y0hhdKkyrApFCZD"
          ],
          [
            "name"=> "Amanda Seyfried",
            "country"=> "",
            "genre"=> "hollywood",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2739df743876af625c169430dee",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0295111c0a57f4e6b1ca49efa3",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485195111c0a57f4e6b1ca49efa3",
            "spotify_id"=> "5RZjpmuD14JKXvB8Ry1G1u"
          ],
          [
            "name"=> "Snow Tha Product",
            "country"=> "",
            "genre"=> "alternative r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0d214c67744b1864b3a0d7bc",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740d214c67744b1864b3a0d7bc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780d214c67744b1864b3a0d7bc",
            "spotify_id"=> "3p3jPcp8b7WL9XYj4xlsWj"
          ],
          [
            "name"=> "SALES",
            "country"=> "",
            "genre"=> "orlando indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8a95cd388f98773b9bc5e9f9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748a95cd388f98773b9bc5e9f9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788a95cd388f98773b9bc5e9f9",
            "spotify_id"=> "6vVztIuqdDHvYWxOEXCzjN"
          ],
          [
            "name"=> "Open Blue Sky",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb54eaa21682a85c98a7912b1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b54eaa21682a85c98a7912b1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b54eaa21682a85c98a7912b1",
            "spotify_id"=> "0G1U8wfQEhTYRtBPel0hlC"
          ],
          [
            "name"=> "Slayyyter",
            "country"=> "",
            "genre"=> "escape room",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb514eea73c6c549ead2dc5c85",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174514eea73c6c549ead2dc5c85",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178514eea73c6c549ead2dc5c85",
            "spotify_id"=> "4QM5QCHicznALtX885CnZC"
          ],
          [
            "name"=> "SIDEPIECE",
            "country"=> "",
            "genre"=> "edm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb380a12022f1f58814eca1942",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174380a12022f1f58814eca1942",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178380a12022f1f58814eca1942",
            "spotify_id"=> "5czbzNZZfWpyFgZyfT3Mkk"
          ],
          [
            "name"=> "Shaboozey",
            "country"=> "",
            "genre"=> "pop rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb56c82d989856086bf7af9d5c",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517456c82d989856086bf7af9d5c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17856c82d989856086bf7af9d5c",
            "spotify_id"=> "3y2cIKLjiOlp1Np37WiUdH"
          ],
          [
            "name"=> "Lunar Skybox",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb92e1ef6d01282fb7b3e13526",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517492e1ef6d01282fb7b3e13526",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17892e1ef6d01282fb7b3e13526",
            "spotify_id"=> "76BVRXGW3GAFk4cXxAX1Ba"
          ],
          [
            "name"=> "Meryl Streep",
            "country"=> "",
            "genre"=> "hollywood",
            "bg_img"=> "https://i.scdn.co/image/bed81fc6e2028fa4c7d01fa2066f4d600b511f03",
            "md_img"=> "https://i.scdn.co/image/48037fd8e79959f2be362fe6db0a95387b6cf3f0",
            "sm_img"=> "https://i.scdn.co/image/53387f5629a48079564d27fca5419290372e3587",
            "spotify_id"=> "2HB65P72dFRiOKvbLLcil2"
          ],
          [
            "name"=> "Leo Santana",
            "country"=> "",
            "genre"=> "arrocha",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9c301d2486e33ad58c85db8e",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749c301d2486e33ad58c85db8e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789c301d2486e33ad58c85db8e",
            "spotify_id"=> "7KVJCU4z5L4EUHILL8aMxR"
          ],
          [
            "name"=> "Sullivan King",
            "country"=> "",
            "genre"=> "dubstep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb47dda9ffa09b817661bed2ac",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517447dda9ffa09b817661bed2ac",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17847dda9ffa09b817661bed2ac",
            "spotify_id"=> "1CXuuw8HJhyN80HlNzvL1e"
          ],
          [
            "name"=> "salem ilese",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3da79849ed72fe525fb8ac00",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743da79849ed72fe525fb8ac00",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783da79849ed72fe525fb8ac00",
            "spotify_id"=> "3QJUFtGBGL05vo0kCJZsmT"
          ],
          [
            "name"=> "Slow Pulp",
            "country"=> "",
            "genre"=> "bubblegrunge",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebaf8de1de25f395082edc2251",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174af8de1de25f395082edc2251",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178af8de1de25f395082edc2251",
            "spotify_id"=> "2JFTRDi5v7JtqoouVe1z5D"
          ],
          [
            "name"=> "Dropping Sound",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273a295fd2b07baa16ee57d2a20",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02a295fd2b07baa16ee57d2a20",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851a295fd2b07baa16ee57d2a20",
            "spotify_id"=> "6NZNLrGP1XkGx2sYrd5c8C"
          ],
          [
            "name"=> "Two Steps from Hell",
            "country"=> "",
            "genre"=> "epicore",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2738f5636c9f7c8e432f81fe29a",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e028f5636c9f7c8e432f81fe29a",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851369c295afeb6a7cbc40bed64",
            "spotify_id"=> "2qvP9yerCZCS0U1gZU8wYp"
          ],
          [
            "name"=> "Donna Summer",
            "country"=> "",
            "genre"=> "disco",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb739ffc27b8655e4ae4f12a66",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174739ffc27b8655e4ae4f12a66",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178739ffc27b8655e4ae4f12a66",
            "spotify_id"=> "2eogQKWWoohI3BSnoG7E2U"
          ],
          [
            "name"=> "Siddharth - Garima",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4bb4215885beface12facf81",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744bb4215885beface12facf81",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784bb4215885beface12facf81",
            "spotify_id"=> "6k6TIai4KyKG1DeIMftSmJ"
          ],
          [
            "name"=> "Softsmile",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7949e9f6ac69e2026ced7ff1",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747949e9f6ac69e2026ced7ff1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787949e9f6ac69e2026ced7ff1",
            "spotify_id"=> "1nNEk01Xrm5meZG6zclZoh"
          ],
          [
            "name"=> "Camilo Sesto",
            "country"=> "",
            "genre"=> "bolero",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0d23abdc39b6f8a1caee687f",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740d23abdc39b6f8a1caee687f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780d23abdc39b6f8a1caee687f",
            "spotify_id"=> "2Cy7KBSkqu7otJfuMTWT7Y"
          ],
          [
            "name"=> "Speaker Knockerz",
            "country"=> "",
            "genre"=> "melodic rap",
            "bg_img"=> "https://i.scdn.co/image/15393c7cbad4d971992da0cb7248d34dd2b82daa",
            "md_img"=> "https://i.scdn.co/image/ee8650f61d66af575b608299779bfdfe4fa5d9ed",
            "sm_img"=> "https://i.scdn.co/image/761ee2fa954a66b4f1434f14adc76513bfb95766",
            "spotify_id"=> "3KuLo66B73btyQpdXlkqFx"
          ],
          [
            "name"=> "Sleighbelle",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb844f7fbc0505ecef4226d8ee",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174844f7fbc0505ecef4226d8ee",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178844f7fbc0505ecef4226d8ee",
            "spotify_id"=> "16bzVf80P3xJi4LcUVv7ok"
          ],
          [
            "name"=> "J Spooks",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb59793465367bd1eab04b9f52",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517459793465367bd1eab04b9f52",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17859793465367bd1eab04b9f52",
            "spotify_id"=> "36Tn5h23ysORlLKc42UXfe"
          ],
          [
            "name"=> "Sha EK",
            "country"=> "",
            "genre"=> "bronx drill",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8a6861bea402c923de967da5",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748a6861bea402c923de967da5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788a6861bea402c923de967da5",
            "spotify_id"=> "3jVAqTL4NbB88q4lj94VX9"
          ],
          [
            "name"=> "SDM",
            "country"=> "",
            "genre"=> "french hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbff42a7c8e790a52919fa7b9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bff42a7c8e790a52919fa7b9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bff42a7c8e790a52919fa7b9",
            "spotify_id"=> "0LKAV3zJ8a8AIGnyc5OvfB"
          ],
          [
            "name"=> "Sam Fischer",
            "country"=> "",
            "genre"=> "australian pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3fe34a07ce8c3f3f16d8ea8e",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743fe34a07ce8c3f3f16d8ea8e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783fe34a07ce8c3f3f16d8ea8e",
            "spotify_id"=> "6L1XC7NrmgWRlwAeLJvVtA"
          ],
          [
            "name"=> "Heroes Del Silencio",
            "country"=> "",
            "genre"=> "latin alternative",
            "bg_img"=> "https://i.scdn.co/image/9ffe8fc45b8bad986946367201a3e547d9a6dc6a",
            "md_img"=> "https://i.scdn.co/image/d5008e5652d595a9c678b5791cc2febe52f2991a",
            "sm_img"=> "https://i.scdn.co/image/5bc475c4723f1e45ca2be335f2a824f981989f91",
            "spotify_id"=> "3qAPxVwIQRBuz5ImPUxpZT"
          ],
          [
            "name"=> "Sara Kays",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4ab3b8df4648b303484a692d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744ab3b8df4648b303484a692d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784ab3b8df4648b303484a692d",
            "spotify_id"=> "7Lk9V7E1u5gqSHmtcKlOqH"
          ],
          [
            "name"=> "Arc System Works",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27382e6573afb9dc64e1741050f",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0282e6573afb9dc64e1741050f",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485182e6573afb9dc64e1741050f",
            "spotify_id"=> "7vlM4bn4gPubcmntK8UBp0"
          ],
          [
            "name"=> "Conner Smith",
            "country"=> "",
            "genre"=> "modern country pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe0c9b64e28bed30c90065987",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e0c9b64e28bed30c90065987",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e0c9b64e28bed30c90065987",
            "spotify_id"=> "0y2FPygoi6LVc75pxCgsMk"
          ],
          [
            "name"=> "Sugarland",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebed9c4a676ace03ebf1f8a35f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ed9c4a676ace03ebf1f8a35f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ed9c4a676ace03ebf1f8a35f",
            "spotify_id"=> "0hYxQe3AK5jBPCr5MumLHD"
          ],
          [
            "name"=> "Ab-Soul",
            "country"=> "",
            "genre"=> "conscious hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb313ba2f006e069072e6ed486",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174313ba2f006e069072e6ed486",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178313ba2f006e069072e6ed486",
            "spotify_id"=> "0g9vAlRPK9Gt3FKCekk4TW"
          ],
          [
            "name"=> "Shenseea",
            "country"=> "",
            "genre"=> "dancehall",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3e4ee44e38af985e67a4682f",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743e4ee44e38af985e67a4682f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783e4ee44e38af985e67a4682f",
            "spotify_id"=> "1OFOShsIbhy1l5x73yuVyB"
          ],
          [
            "name"=> "STM",
            "country"=> "",
            "genre"=> "emoplugg",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb264d94f41e8d95bd8b149b83",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174264d94f41e8d95bd8b149b83",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178264d94f41e8d95bd8b149b83",
            "spotify_id"=> "31wcwYyqQIfZCtIzCY3R53"
          ],
          [
            "name"=> "Shane Smith & the Saints",
            "country"=> "",
            "genre"=> "classic texas country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe8132a9b7c52c58c6004f735",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e8132a9b7c52c58c6004f735",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e8132a9b7c52c58c6004f735",
            "spotify_id"=> "4pLxUMyDrijXynrUP59whJ"
          ],
          [
            "name"=> "Pineapple StormTv",
            "country"=> "",
            "genre"=> "rap baiano",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe915b03e0d384550b452d024",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e915b03e0d384550b452d024",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e915b03e0d384550b452d024",
            "spotify_id"=> "09U6hmCerKcIJrixubiBjm"
          ],
          [
            "name"=> "Jill Scott",
            "country"=> "",
            "genre"=> "hip pop",
            "bg_img"=> "https://i.scdn.co/image/1523c231a2f7cb0c83ecf0b6e933e6033c8b38d6",
            "md_img"=> "https://i.scdn.co/image/debe265fbbb9ab046cf301ab0c41e9210f9304c0",
            "sm_img"=> "https://i.scdn.co/image/1097b949e7e6a19b7671a0c9932a552fe307e056",
            "spotify_id"=> "6AVLthptCPhfrxlHadOBJD"
          ],
          [
            "name"=> "De La Soul",
            "country"=> "",
            "genre"=> "east coast hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc443011311dcf7f6eeaf507d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c443011311dcf7f6eeaf507d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c443011311dcf7f6eeaf507d",
            "spotify_id"=> "1Z8ODXyhEBi3WynYw0Rya6"
          ],
          [
            "name"=> "PEDRO SAMPAIO",
            "country"=> "",
            "genre"=> "funk carioca",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb26eb698a396a9cd44ab2658c",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517426eb698a396a9cd44ab2658c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17826eb698a396a9cd44ab2658c",
            "spotify_id"=> "5wbf52LA6kcaboHSN6NEF1"
          ],
          [
            "name"=> "Stephan Moccio",
            "country"=> "",
            "genre"=> "background piano",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc31f27fac58eb2839a1b2cde",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c31f27fac58eb2839a1b2cde",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c31f27fac58eb2839a1b2cde",
            "spotify_id"=> "25s9H1JQmTu3iuFzpXWUIg"
          ],
          [
            "name"=> "Björn Skifs",
            "country"=> "",
            "genre"=> "classic swedish pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3e40ad58eb4c20c3f5d51632",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743e40ad58eb4c20c3f5d51632",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783e40ad58eb4c20c3f5d51632",
            "spotify_id"=> "1Ek3VdZ8EPmcvgRIqnHlrF"
          ],
          [
            "name"=> "Scripture Lullabies",
            "country"=> "",
            "genre"=> "instrumental worship",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb24a14f38460a44c5025aefa9",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517424a14f38460a44c5025aefa9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17824a14f38460a44c5025aefa9",
            "spotify_id"=> "2bBRxQ6hEba2rm64HLgFTo"
          ],
          [
            "name"=> "Skorde",
            "country"=> "",
            "genre"=> "chill breakcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4a1f1167264b7ccf2ddf59e8",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744a1f1167264b7ccf2ddf59e8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784a1f1167264b7ccf2ddf59e8",
            "spotify_id"=> "3voCipmmrW5uF4EMA6aSbj"
          ],
          [
            "name"=> "sapientdream",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8abd2a4d2bcc78d3affc15db",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748abd2a4d2bcc78d3affc15db",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788abd2a4d2bcc78d3affc15db",
            "spotify_id"=> "4wOqWyXZiVMLchDC2H9CyP"
          ],
          [
            "name"=> "The Stupendium",
            "country"=> "",
            "genre"=> "otacore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe54a3a7e8225f2a80f4dce8d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e54a3a7e8225f2a80f4dce8d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e54a3a7e8225f2a80f4dce8d",
            "spotify_id"=> "5bkJvRo8OeDzWKpiY4GK0O"
          ],
          [
            "name"=> "Matt Sassari",
            "country"=> "",
            "genre"=> "french tech house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5caba46565a7cf5203134def",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745caba46565a7cf5203134def",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785caba46565a7cf5203134def",
            "spotify_id"=> "21dVknSLCsK37cWozWDZZS"
          ],
          [
            "name"=> "Miracle Of Sound",
            "country"=> "",
            "genre"=> "antiviral pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5d188f0361261185ee76a75a",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745d188f0361261185ee76a75a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785d188f0361261185ee76a75a",
            "spotify_id"=> "4FmJD0mpgQ70SNt2EKK8tq"
          ],
          [
            "name"=> "The Presidents Of The United States Of America",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5f58fb70bc91512a98ad530b",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745f58fb70bc91512a98ad530b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785f58fb70bc91512a98ad530b",
            "spotify_id"=> "1lZvg4fNAqHoj6I9N8naBM"
          ],
          [
            "name"=> "Borislav Slavov",
            "country"=> "",
            "genre"=> "video game music",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb01189416ff48e32d2bd728f5",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517401189416ff48e32d2bd728f5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17801189416ff48e32d2bd728f5",
            "spotify_id"=> "7Fl4F5eJRtPMEl3jTYMUQt"
          ],
          [
            "name"=> "Sauce Walka",
            "country"=> "",
            "genre"=> "houston rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc1d6854c810213b75d4c3024",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c1d6854c810213b75d4c3024",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c1d6854c810213b75d4c3024",
            "spotify_id"=> "42yf4QkiE9a252krn9OUCb"
          ],
          [
            "name"=> "Bobby Shmurda",
            "country"=> "",
            "genre"=> "nyc rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebee12e6771607433caee705a3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ee12e6771607433caee705a3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ee12e6771607433caee705a3",
            "spotify_id"=> "34Y0ldeyUv7jBvukWOGASO"
          ],
          [
            "name"=> "DJ Shadow",
            "country"=> "",
            "genre"=> "downtempo",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb003c675c72da2c9ad13ed2f7",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174003c675c72da2c9ad13ed2f7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178003c675c72da2c9ad13ed2f7",
            "spotify_id"=> "5CE2IfdYZEQGIDsfiRm8SI"
          ],
          [
            "name"=> "Daisy Jones & The Six",
            "country"=> "",
            "genre"=> "modern folk rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba87f3c4ed17f9068a8d933f3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a87f3c4ed17f9068a8d933f3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a87f3c4ed17f9068a8d933f3",
            "spotify_id"=> "0ZUdYzRCIrxbsd80MmGMqo"
          ],
          [
            "name"=> "Shekhar Ravjiani",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9837e026c8c778753cc83c8b",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749837e026c8c778753cc83c8b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789837e026c8c778753cc83c8b",
            "spotify_id"=> "4xd7mLI7urqrxELaXhAvzw"
          ],
          [
            "name"=> "Sandro Cavazza",
            "country"=> "",
            "genre"=> "swedish pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebabc78e987a9deb1cde2734c3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174abc78e987a9deb1cde2734c3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178abc78e987a9deb1cde2734c3",
            "spotify_id"=> "5JYo7gm2dkyLLlWHjxS7Dy"
          ],
          [
            "name"=> "Simply Red",
            "country"=> "",
            "genre"=> "british soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebdf126340c69932e9c9ff27de",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174df126340c69932e9c9ff27de",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178df126340c69932e9c9ff27de",
            "spotify_id"=> "1fa0cOhromAZdq2xRA4vv8"
          ],
          [
            "name"=> "Said The Sky",
            "country"=> "",
            "genre"=> "melodic dubstep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcd9e2b8f901285164a7fde6c",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cd9e2b8f901285164a7fde6c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cd9e2b8f901285164a7fde6c",
            "spotify_id"=> "4LZ4De2MoO3lP6QaNCfvcu"
          ],
          [
            "name"=> "Lorna Shore",
            "country"=> "",
            "genre"=> "blackened deathcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb49e1d0975748b726a7a0032c",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517449e1d0975748b726a7a0032c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17849e1d0975748b726a7a0032c",
            "spotify_id"=> "6vXYoy8ouRVib302zxaxFF"
          ],
          [
            "name"=> "Maribou State",
            "country"=> "",
            "genre"=> "electronica",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbeaea33eaf23808b73167155",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174beaea33eaf23808b73167155",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178beaea33eaf23808b73167155",
            "spotify_id"=> "7zrkALJ9ayRjzysp4QYoEg"
          ],
          [
            "name"=> "Daniel Tiger’s Neighborhood",
            "country"=> "",
            "genre"=> "cartoon",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba5431057066d34a3a6e95502",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a5431057066d34a3a6e95502",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a5431057066d34a3a6e95502",
            "spotify_id"=> "0T91UD2v3byVXh8aSP8oHG"
          ],
          [
            "name"=> "Ryuichi Sakamoto",
            "country"=> "",
            "genre"=> "compositional ambient",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb323c73cb431edf7ba9ed34b2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174323c73cb431edf7ba9ed34b2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178323c73cb431edf7ba9ed34b2",
            "spotify_id"=> "1tcgfoMTT1szjUeaikxRjA"
          ],
          [
            "name"=> "Joel Sunny",
            "country"=> "",
            "genre"=> "pop violin",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8609182c78f15302326424e2",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748609182c78f15302326424e2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788609182c78f15302326424e2",
            "spotify_id"=> "4WC54JUV6ewZOuz8Cl2Cym"
          ],
          [
            "name"=> "Saving Abel",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3fef514ee58f714dec70107e",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743fef514ee58f714dec70107e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783fef514ee58f714dec70107e",
            "spotify_id"=> "2AVVj8ezW2mJ0v8u7XydiF"
          ],
          [
            "name"=> "Smokepurpp",
            "country"=> "",
            "genre"=> "melodic rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7caf23154583969c7482e0ec",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747caf23154583969c7482e0ec",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787caf23154583969c7482e0ec",
            "spotify_id"=> "21dooacK2WGBB5amYvKyfM"
          ],
          [
            "name"=> "Siddhartha",
            "country"=> "",
            "genre"=> "latin rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb69da7f2f691d630482f17670",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517469da7f2f691d630482f17670",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17869da7f2f691d630482f17670",
            "spotify_id"=> "2aqFBHOpM9uIgBpUsdq09x"
          ],
          [
            "name"=> "Shiro SAGISU",
            "country"=> "",
            "genre"=> "anime score",
            "bg_img"=> "https://i.scdn.co/image/f92fa0801a9a2ecc9ff854c5d80b847afb684e6c",
            "md_img"=> "https://i.scdn.co/image/1fedab62700e044987f8a7c7e27edc1c1fd83e91",
            "sm_img"=> "https://i.scdn.co/image/43be9c61689c917af0c9204dcf9e1d839c836b67",
            "spotify_id"=> "5k3NfhEeZHpouIGDpjKOPo"
          ],
          [
            "name"=> "Spa",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb709628c3e3dd8d2743b9bf4e",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174709628c3e3dd8d2743b9bf4e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178709628c3e3dd8d2743b9bf4e",
            "spotify_id"=> "4LUYOHM73gVlfY5TzRbIgX"
          ],
          [
            "name"=> "Dylan Schneider",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7f35e0317f1c20baa13251a0",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747f35e0317f1c20baa13251a0",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787f35e0317f1c20baa13251a0",
            "spotify_id"=> "5lRB3MAJfKzlt7dgYMHWgY"
          ],
          [
            "name"=> "Blue Swede",
            "country"=> "",
            "genre"=> "classic swedish pop",
            "bg_img"=> "https://i.scdn.co/image/8128a8fc52288607eb2e4667a4c172432b3e03e1",
            "md_img"=> "https://i.scdn.co/image/06909e9d90752247c4ce27bed27e6a32b99e9875",
            "sm_img"=> "https://i.scdn.co/image/a6ea3e233add9bd6cffc84f3e0333de6be2303f1",
            "spotify_id"=> "0UpuH5U4nZ3UGGUJi0Zfbp"
          ],
          [
            "name"=> "Story Of The Year",
            "country"=> "",
            "genre"=> "neon pop punk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1ac582762e74510cfd6ef254",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741ac582762e74510cfd6ef254",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781ac582762e74510cfd6ef254",
            "spotify_id"=> "0KDuKk6YdEu3hR56HtXmxt"
          ],
          [
            "name"=> "SkySky",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb9304187ef7f83334dc44cff",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b9304187ef7f83334dc44cff",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b9304187ef7f83334dc44cff",
            "spotify_id"=> "24pnYmyDZqfVvQGqK1RZ9b"
          ],
          [
            "name"=> "Static-X",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7f4a72d9541571d430c157c7",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747f4a72d9541571d430c157c7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787f4a72d9541571d430c157c7",
            "spotify_id"=> "7JDSHlDdVTo7aZKdQZ53Vf"
          ],
          [
            "name"=> "Sherine",
            "country"=> "",
            "genre"=> "arab pop",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273cfa4e906cda39d8f62fe81e3",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02cfa4e906cda39d8f62fe81e3",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851cfa4e906cda39d8f62fe81e3",
            "spotify_id"=> "2Wk167T0fY1fABsHM5qFcI"
          ],
          [
            "name"=> "Lea Salonga",
            "country"=> "",
            "genre"=> "movie tunes",
            "bg_img"=> "https://i.scdn.co/image/191d9c926a51e6d0abc49b7416689b52a2662efc",
            "md_img"=> "https://i.scdn.co/image/79cb9dd9630ff9e1224356bdab99d6594402eb19",
            "sm_img"=> "https://i.scdn.co/image/24777b916961774bd8a97e070ce63bfd27aa8b3b",
            "spotify_id"=> "1GlMjIezcLwV3OFlX0uXOv"
          ],
          [
            "name"=> "Nicole Scherzinger",
            "country"=> "",
            "genre"=> "dance pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb13bcbecd7d8099a9d16403cc",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517413bcbecd7d8099a9d16403cc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17813bcbecd7d8099a9d16403cc",
            "spotify_id"=> "40xbWSB4JPdOkRyuTDy1oP"
          ],
          [
            "name"=> "Samara Joy",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc6c9c0c5f68c5cccbb6f4590",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c6c9c0c5f68c5cccbb6f4590",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c6c9c0c5f68c5cccbb6f4590",
            "spotify_id"=> "5LkbTSqXfMBjFSGi9LOGjq"
          ],
          [
            "name"=> "Chuy Lizarraga y Su Banda Tierra Sinaloense",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb81eee52663c63f45d8ead6cc",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517481eee52663c63f45d8ead6cc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17881eee52663c63f45d8ead6cc",
            "spotify_id"=> "1DA8SLXtp8MMVpgaOWzMQr"
          ],
          [
            "name"=> "Kevin Sherwood",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb82a01d3b0a1890a78e9e527a",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517482a01d3b0a1890a78e9e527a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17882a01d3b0a1890a78e9e527a",
            "spotify_id"=> "0etNimDSQLWFbktPBHQ5vb"
          ],
          [
            "name"=> "Kim Walker-Smith",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc6ec9a29038b0dfdf7a3425b",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c6ec9a29038b0dfdf7a3425b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c6ec9a29038b0dfdf7a3425b",
            "spotify_id"=> "4leTWyczsXYGlzUh8sFGSz"
          ],
          [
            "name"=> "Dean Snowfield",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7579fd40f92614dedfa46ec1",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747579fd40f92614dedfa46ec1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787579fd40f92614dedfa46ec1",
            "spotify_id"=> "6AnoDRKkG9Pv5hKRHp2mNk"
          ],
          [
            "name"=> "Arc De Soleil",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb20a7d647d46501640c6f038d",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517420a7d647d46501640c6f038d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17820a7d647d46501640c6f038d",
            "spotify_id"=> "2iLMJdaqsQ44X7MPRD7rR5"
          ],
          [
            "name"=> "Black Label Society",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebca9e1ddb61172c1b9672567a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ca9e1ddb61172c1b9672567a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ca9e1ddb61172c1b9672567a",
            "spotify_id"=> "0zfT626RwO6zN3RDYeRit5"
          ],
          [
            "name"=> "All Sons & Daughters",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/1e22525d15261705e8e0ba7fcca1c141e4f310cc",
            "md_img"=> "https://i.scdn.co/image/4ebb2a8d81083c8d5753ab26ebc673a138ff88cd",
            "sm_img"=> "https://i.scdn.co/image/08dadc7b39128ea93ef08791f2068c612b4111de",
            "spotify_id"=> "44LPOpECjnIlnwH91wo2ir"
          ],
          [
            "name"=> "Savage Garden",
            "country"=> "",
            "genre"=> "boy band",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba218283491135c3c72911719",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a218283491135c3c72911719",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a218283491135c3c72911719",
            "spotify_id"=> "3NRFinRTEqUCfaTTZmk8ek"
          ],
          [
            "name"=> "Los Buitres De Culiacan Sinaloa",
            "country"=> "",
            "genre"=> "corrido",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5a35f07af2e337b9ecd0d3db",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745a35f07af2e337b9ecd0d3db",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785a35f07af2e337b9ecd0d3db",
            "spotify_id"=> "535ap2f16rTOKTMPTkvbGB"
          ],
          [
            "name"=> "ShooterGang Kony",
            "country"=> "",
            "genre"=> "cali rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb49cffbc009218665124696c1",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517449cffbc009218665124696c1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17849cffbc009218665124696c1",
            "spotify_id"=> "0dT2U2jUx6OmKlyeQOH8AK"
          ],
          [
            "name"=> "Banda Los Sebastianes De Saúl Plata",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2c063b80e8b7c4e991c8c698",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742c063b80e8b7c4e991c8c698",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782c063b80e8b7c4e991c8c698",
            "spotify_id"=> "2XTrqe2RU5niqO0RNA6Zct"
          ],
          [
            "name"=> "Shaan",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebdeea5cdcb379d8ef0c31f8bc",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174deea5cdcb379d8ef0c31f8bc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178deea5cdcb379d8ef0c31f8bc",
            "spotify_id"=> "5cB4d4jPYjMT326sjihQ4m"
          ],
          [
            "name"=> "Tito Y Su Torbellino",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273dd068059a5965ef33b578bfd",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02dd068059a5965ef33b578bfd",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851dd068059a5965ef33b578bfd",
            "spotify_id"=> "1QkpNJ56SmIN2EaqAXf1m7"
          ],
          [
            "name"=> "Banda Sinaloense MS de Sergio Lizárraga",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27395955e31ab67094347227cb8",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0295955e31ab67094347227cb8",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485195955e31ab67094347227cb8",
            "spotify_id"=> "6Y6rrQjzcZhaM4RXusI8UP"
          ],
          [
            "name"=> "Sharon Jones & The Dap-Kings",
            "country"=> "",
            "genre"=> "black americana",
            "bg_img"=> "https://i.scdn.co/image/cd0f5585d478bbb91cff3e0b723ed91c6d2046d7",
            "md_img"=> "https://i.scdn.co/image/2882183a98e1e3db187e81de77ca01980a7566c0",
            "sm_img"=> "https://i.scdn.co/image/294d9b05f873f5b86bdb77975b08d16939e5d053",
            "spotify_id"=> "6LufpoVlIYKQCu9Gjpk8B7"
          ],
          [
            "name"=> "La Original Banda El Limón de Salvador Lizárraga",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf66f891431752dc3fc73e1e0",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f66f891431752dc3fc73e1e0",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f66f891431752dc3fc73e1e0",
            "spotify_id"=> "2ghByd8ucnRTWceSAnAZ0G"
          ],
          [
            "name"=> "Eternal Spring",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb350b1b0e5bac2df757c0e5ef",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174350b1b0e5bac2df757c0e5ef",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178350b1b0e5bac2df757c0e5ef",
            "spotify_id"=> "6yDo1kCCuaAyfUy37qTiih"
          ],
          [
            "name"=> "Sukhwinder Singh",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc89e803f887e3829819bf82a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c89e803f887e3829819bf82a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c89e803f887e3829819bf82a",
            "spotify_id"=> "19MVxKZZdPj2X0F8pi0OCT"
          ],
          [
            "name"=> "The Dead South",
            "country"=> "",
            "genre"=> "saskatchewan indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb35cb148f1c2d301061783666",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517435cb148f1c2d301061783666",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17835cb148f1c2d301061783666",
            "spotify_id"=> "3HR1xtIsUefdFnkI1XHgeA"
          ],
          [
            "name"=> "Naomi Scott",
            "country"=> "",
            "genre"=> "movie tunes",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb51c67b8546e3e3f4d4ac103e",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517451c67b8546e3e3f4d4ac103e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17851c67b8546e3e3f4d4ac103e",
            "spotify_id"=> "2Zi3RrdQqk63Xj0914STkS"
          ],
          [
            "name"=> "Shouse",
            "country"=> "",
            "genre"=> "aussietronica",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf3c44a12fbad90d8165ce544",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f3c44a12fbad90d8165ce544",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f3c44a12fbad90d8165ce544",
            "spotify_id"=> "2TcGJdSOiOvITBzhvfX8XB"
          ],
          [
            "name"=> "Sinéad O'Connor",
            "country"=> "",
            "genre"=> "lilith",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc7129fcb3789c91f9f66106d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c7129fcb3789c91f9f66106d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c7129fcb3789c91f9f66106d",
            "spotify_id"=> "4sD9znwiVFx9cgRPZ42aQ1"
          ],
          [
            "name"=> "Seal",
            "country"=> "",
            "genre"=> "british soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe29f9c69aad50e33fa61805a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e29f9c69aad50e33fa61805a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e29f9c69aad50e33fa61805a",
            "spotify_id"=> "5GtMEZEeFFsuHY8ad4kOxv"
          ],
          [
            "name"=> "Cobra Starship",
            "country"=> "",
            "genre"=> "neon pop punk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc48ae32aff5303453105b2d3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c48ae32aff5303453105b2d3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c48ae32aff5303453105b2d3",
            "spotify_id"=> "2aYJ5LAta2ScCdfLhKgZOY"
          ],
          [
            "name"=> "San Holo",
            "country"=> "",
            "genre"=> "brostep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb283643e4a44fc33f670dbad9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174283643e4a44fc33f670dbad9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178283643e4a44fc33f670dbad9",
            "spotify_id"=> "0jNDKefhfSbLR9sFvcPLHo"
          ],
          [
            "name"=> "Sido",
            "country"=> "",
            "genre"=> "german hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebacad48182c5778b5a0ec77ed",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174acad48182c5778b5a0ec77ed",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178acad48182c5778b5a0ec77ed",
            "spotify_id"=> "4Yttlv9ndGjCDCVLqM7ACq"
          ],
          [
            "name"=> "City of London Sinfonia",
            "country"=> "",
            "genre"=> "british orchestra",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2736dcf234c07ff62d2e3a2d4e5",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e026dcf234c07ff62d2e3a2d4e5",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048516dcf234c07ff62d2e3a2d4e5",
            "spotify_id"=> "4JKHXlntTvmZnLxjbeRcPL"
          ],
          [
            "name"=> "Orchestra at Temple Square",
            "country"=> "",
            "genre"=> "american orchestra",
            "bg_img"=> "https://i.scdn.co/image/f959cdf42893b2e08438f2c2584f23d940661f97",
            "md_img"=> "https://i.scdn.co/image/44060ae243e267748df32e9157f5d6e598c8d16c",
            "sm_img"=> "https://i.scdn.co/image/93dc16099e3de9a9c4134df88e0fc552ccdc8e22",
            "spotify_id"=> "4kAIRZipPTtTbZBTudxcEA"
          ],
          [
            "name"=> "Fito Olivares y Su Grupo",
            "country"=> "",
            "genre"=> "gruperas inmortales",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27317919dcb20af582d1ba75ff1",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0217919dcb20af582d1ba75ff1",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485117919dcb20af582d1ba75ff1",
            "spotify_id"=> "3zzeZVLuOeetfimOd4k8rE"
          ],
          [
            "name"=> "S. Janaki",
            "country"=> "",
            "genre"=> "classic kollywood",
            "bg_img"=> "https://i.scdn.co/image/ab6772690000c46cefaf8882f562760329d1edf6",
            "md_img"=> "https://i.scdn.co/image/ab6772690000dd22efaf8882f562760329d1edf6",
            "sm_img"=> "https://i.scdn.co/image/ab6772690000bac3efaf8882f562760329d1edf6",
            "spotify_id"=> "5Xpg6PBSUOoho2lI9qLjiu"
          ],
          [
            "name"=> "XANAKIN SKYWOK",
            "country"=> "",
            "genre"=> "aesthetic rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb08e1c9aa22f68e1e76af12d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b08e1c9aa22f68e1e76af12d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b08e1c9aa22f68e1e76af12d",
            "spotify_id"=> "2YHPVKeJcX02OyeNneU5v3"
          ],
          [
            "name"=> "Javier Solís",
            "country"=> "",
            "genre"=> "bolero",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba753e631df34c4412727c7e3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a753e631df34c4412727c7e3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a753e631df34c4412727c7e3",
            "spotify_id"=> "7jerD1mbWgyDukHAmCvdCj"
          ],
          [
            "name"=> "Searows",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb706bf2101bcce0f599f71ff",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b706bf2101bcce0f599f71ff",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b706bf2101bcce0f599f71ff",
            "spotify_id"=> "0nugNBwdWaptgIAsEtx1It"
          ],
          [
            "name"=> "Seals and Crofts",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/7e0eb81433b92ae11894a35a53aa870be824d772",
            "md_img"=> "https://i.scdn.co/image/76ccb803ba5113aa822077dd9f1c3187ca9d323d",
            "sm_img"=> "https://i.scdn.co/image/b710389b2afcc6a256cd68d8409f9fdf481f78af",
            "spotify_id"=> "6jdObwsrIjSRnBbMw6lPBj"
          ],
          [
            "name"=> "Shreyas Puranik",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4e8db3e619a2772ca4f9d4e3",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744e8db3e619a2772ca4f9d4e3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784e8db3e619a2772ca4f9d4e3",
            "spotify_id"=> "5o36rLQd78Zh8CaT8rn59d"
          ],
          [
            "name"=> "Sleepy Brown",
            "country"=> "",
            "genre"=> "atl hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27386b41964ad48636d28529789",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0286b41964ad48636d28529789",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485186b41964ad48636d28529789",
            "spotify_id"=> "7Dnu2NmddNymEI2LMZVH5v"
          ],
          [
            "name"=> "Sly & The Family Stone",
            "country"=> "",
            "genre"=> "classic soul",
            "bg_img"=> "https://i.scdn.co/image/9aef578389c4a9d27e15a627acb784c41094e79d",
            "md_img"=> "https://i.scdn.co/image/468e538febbd5553625965bacc8abd5a5e44ed71",
            "sm_img"=> "https://i.scdn.co/image/110d1322a3a6cb7871fa3a326af3040431419f5d",
            "spotify_id"=> "5m8H6zSadhu1j9Yi04VLqD"
          ],
          [
            "name"=> "Superstar Pride",
            "country"=> "",
            "genre"=> "southern hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273ac79f74165dc38b604831207",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02ac79f74165dc38b604831207",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851ac79f74165dc38b604831207",
            "spotify_id"=> "3FBEsNyIwRnOHOf1Rv3SLa"
          ],
          [
            "name"=> "siouxxie sixxsta",
            "country"=> "",
            "genre"=> "glitchcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbc5889447e50110d27ac925f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bc5889447e50110d27ac925f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bc5889447e50110d27ac925f",
            "spotify_id"=> "0OO76E5lRfeyBI3fkA73Dr"
          ],
          [
            "name"=> "Salim–Sulaiman",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb13a6f2195deea1f736d046e4",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517413a6f2195deea1f736d046e4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17813a6f2195deea1f736d046e4",
            "spotify_id"=> "6ohaQzKaXrobAL8paLSaxq"
          ],
          [
            "name"=> "Closed on Sunday",
            "country"=> "",
            "genre"=> "anime lo-fi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb26a969d8a69271f19d7d2446",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517426a969d8a69271f19d7d2446",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17826a969d8a69271f19d7d2446",
            "spotify_id"=> "1LwjR2mIm78OJRTYdkMLl3"
          ],
          [
            "name"=> "Rebecca Sugar",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2ec35369c14796c9350f846d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742ec35369c14796c9350f846d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782ec35369c14796c9350f846d",
            "spotify_id"=> "6Pd7FRVtwNxFsQIkDMpLGz"
          ],
          [
            "name"=> "Tribal Seeds",
            "country"=> "",
            "genre"=> "reggae rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd9eb1481cd58162daca8a0ec",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d9eb1481cd58162daca8a0ec",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d9eb1481cd58162daca8a0ec",
            "spotify_id"=> "7jgZFR40bWjwOrRCOZFB02"
          ],
          [
            "name"=> "Sylvan Esso",
            "country"=> "",
            "genre"=> "art pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb85da2d1f33da01653deca08",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b85da2d1f33da01653deca08",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b85da2d1f33da01653deca08",
            "spotify_id"=> "39vA9YljbnOApXKniLWBZv"
          ],
          [
            "name"=> "sammy rash",
            "country"=> "",
            "genre"=> "gen z singer-songwriter",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4efaa01cefb3975527350b2d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744efaa01cefb3975527350b2d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784efaa01cefb3975527350b2d",
            "spotify_id"=> "0yXuo2N8r6dzzGgnLNLGZm"
          ],
          [
            "name"=> "SiM",
            "country"=> "",
            "genre"=> "japanese metalcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5bb19dacd079169f667e5299",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745bb19dacd079169f667e5299",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785bb19dacd079169f667e5299",
            "spotify_id"=> "2BM933ADIluGGrPBOhPgIt"
          ],
          [
            "name"=> "Sodikken",
            "country"=> "",
            "genre"=> "otacore",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2732b6d070099d8508bfb806c58",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e022b6d070099d8508bfb806c58",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048512b6d070099d8508bfb806c58",
            "spotify_id"=> "1MUV2xrrCkG9mhZyVUDGEy"
          ],
          [
            "name"=> "Siouxsie and the Banshees",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/baf868deb6e3944db2717194bbdd9016e48f3de2",
            "md_img"=> "https://i.scdn.co/image/f9583d2a331faaba5174ef195f1d46d1c9639af9",
            "sm_img"=> "https://i.scdn.co/image/6565aa6133896a4c77f1b2b9bc9ef7caf55558c0",
            "spotify_id"=> "1n65zfwYIj5kKEtNgxUlWb"
          ],
          [
            "name"=> "Beyond Stillness",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb681c30ce8da5f910de6929f3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174681c30ce8da5f910de6929f3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178681c30ce8da5f910de6929f3",
            "spotify_id"=> "42iQ19B2la2mcUZAksaIo8"
          ],
          [
            "name"=> "Little Simz",
            "country"=> "",
            "genre"=> "alternative r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba0acc52a7b516fecf884dde1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a0acc52a7b516fecf884dde1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a0acc52a7b516fecf884dde1",
            "spotify_id"=> "6eXZu6O7nAUA5z6vLV8NKI"
          ],
          [
            "name"=> "Steve Winwood",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/8a6cfe2373a091c0041b2bae6e576e395944eacd",
            "md_img"=> "https://i.scdn.co/image/1bd7316c847371039652c7bf59335083af10d56e",
            "sm_img"=> "https://i.scdn.co/image/dca0966ec52e2802f7d199ab36c56e76c12abe82",
            "spotify_id"=> "5gxynDEKwNDgxGJmJjZyte"
          ],
          [
            "name"=> "Shinda Kahlon",
            "country"=> "",
            "genre"=> "punjabi pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe524916891fb78a58279d06b",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e524916891fb78a58279d06b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e524916891fb78a58279d06b",
            "spotify_id"=> "6aQfrWHwAcuY8IYItbChZh"
          ],
          [
            "name"=> "SAULT",
            "country"=> "",
            "genre"=> "indie soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb38dfd1af91aeccad71e6412f",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517438dfd1af91aeccad71e6412f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17838dfd1af91aeccad71e6412f",
            "spotify_id"=> "1uRxRKC7d9zwYGSRflTKDR"
          ],
          [
            "name"=> "Sanikwave",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb64e4b8891dfe1b78bf3d2d70",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517464e4b8891dfe1b78bf3d2d70",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17864e4b8891dfe1b78bf3d2d70",
            "spotify_id"=> "4vy5ZH1CnzEqaInvIUu4z1"
          ],
          [
            "name"=> "slō",
            "country"=> "",
            "genre"=> "slowed and reverb",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9086805937b778506f1cf2c6",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749086805937b778506f1cf2c6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789086805937b778506f1cf2c6",
            "spotify_id"=> "5ENhy70PiA8QzfghaFQ7Ey"
          ],
          [
            "name"=> "Sleep Baby Sleep",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb6681fbc935367b92b554dbb",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b6681fbc935367b92b554dbb",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b6681fbc935367b92b554dbb",
            "spotify_id"=> "6e5ygqf81ECK33tTPpbLLq"
          ],
          [
            "name"=> "Astrid S",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb05e65e616e371f4067e63fe1",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517405e65e616e371f4067e63fe1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17805e65e616e371f4067e63fe1",
            "spotify_id"=> "3AVfmawzu83sp94QW7CEGm"
          ],
          [
            "name"=> "Sick Puppies",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfe2104e0eba94c43807ae72c",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fe2104e0eba94c43807ae72c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fe2104e0eba94c43807ae72c",
            "spotify_id"=> "7qAcXJgt1PWnxwUgxMdyuk"
          ],
          [
            "name"=> "Fatman Scoop",
            "country"=> "",
            "genre"=> "nyc rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0a79b0e631f15a9ad1a1e779",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740a79b0e631f15a9ad1a1e779",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780a79b0e631f15a9ad1a1e779",
            "spotify_id"=> "15GGbJKqC6w0VYyAJtjej6"
          ],
          [
            "name"=> "Sonic Youth",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/af335c11a73e9311516bb28800be58311410d1be",
            "md_img"=> "https://i.scdn.co/image/a6f14050fe0b0e188d23298efffd3ff06511e99c",
            "sm_img"=> "https://i.scdn.co/image/976d63d12b1c9ea37edbef69ad5439ab79a59889",
            "spotify_id"=> "5UqTO8smerMvxHYA5xsXb6"
          ],
          [
            "name"=> "Cello Soul",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb991832cee93210b1eb5e9fc4",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174991832cee93210b1eb5e9fc4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178991832cee93210b1eb5e9fc4",
            "spotify_id"=> "1g2vVGycdY9Xowsh2mYCqe"
          ],
          [
            "name"=> "Stunna Girl",
            "country"=> "",
            "genre"=> "cali rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5a78c97180975b7efafb6997",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745a78c97180975b7efafb6997",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785a78c97180975b7efafb6997",
            "spotify_id"=> "4eEkR7IDAXyGngHvnJZpdV"
          ],
          [
            "name"=> "StoryBots",
            "country"=> "",
            "genre"=> "children's music",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf304a4e35681d7351bcc578e",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f304a4e35681d7351bcc578e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f304a4e35681d7351bcc578e",
            "spotify_id"=> "6N6lLMxDF4as6slJ878Rgg"
          ],
          [
            "name"=> "The Pointer Sisters",
            "country"=> "",
            "genre"=> "disco",
            "bg_img"=> "https://i.scdn.co/image/ab6772690000c46c8c57ac844d8c2170149462e3",
            "md_img"=> "https://i.scdn.co/image/ab6772690000dd228c57ac844d8c2170149462e3",
            "sm_img"=> "https://i.scdn.co/image/ab6772690000bac38c57ac844d8c2170149462e3",
            "spotify_id"=> "2kreKea2n96dXjcyAU9j5N"
          ],
          [
            "name"=> "Santigold",
            "country"=> "",
            "genre"=> "alternative dance",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8d7a5250b491f705d4f060b6",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748d7a5250b491f705d4f060b6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788d7a5250b491f705d4f060b6",
            "spotify_id"=> "6Jrxnp0JgqmeUX1veU591p"
          ],
          [
            "name"=> "hoshie star",
            "country"=> "",
            "genre"=> "pink noise",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbaca4ff04637c2a39e5d9e25",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174baca4ff04637c2a39e5d9e25",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178baca4ff04637c2a39e5d9e25",
            "spotify_id"=> "0LWHFUzXPTl9BDdJHDE001"
          ],
          [
            "name"=> "Sarah Connor",
            "country"=> "",
            "genre"=> "german pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfd9d18d99d2ad340a1ddb253",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fd9d18d99d2ad340a1ddb253",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fd9d18d99d2ad340a1ddb253",
            "spotify_id"=> "7e52Ytzjj1q71DUj2cSlch"
          ],
          [
            "name"=> "StreamBeats by Harris Heller",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb38e420994289371cbbd0f8b3",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517438e420994289371cbbd0f8b3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17838e420994289371cbbd0f8b3",
            "spotify_id"=> "6GTRLqqiBPUqaOgyxOraHp"
          ],
          [
            "name"=> "Slaughter to Prevail",
            "country"=> "",
            "genre"=> "russian metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb65de98c894a94e1687645d02",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517465de98c894a94e1687645d02",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17865de98c894a94e1687645d02",
            "spotify_id"=> "24Oiw7BlvO1BETecDLJt6m"
          ],
          [
            "name"=> "Alan Silvestri",
            "country"=> "",
            "genre"=> "orchestral soundtrack",
            "bg_img"=> "https://i.scdn.co/image/99a6958df8dfe17c85eff3ac7d2aed2a87413f72",
            "md_img"=> "https://i.scdn.co/image/4b5404dc1d64c379098aca34b70e21d94ebd05ef",
            "sm_img"=> "https://i.scdn.co/image/5b80afa78a9da41b497012fe8210f34ef28a27e4",
            "spotify_id"=> "0Xk15jHKly4c3AhPr5vjoA"
          ],
          [
            "name"=> "Will Stetson",
            "country"=> "",
            "genre"=> "otacore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0bda14411ca0bb818af47532",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740bda14411ca0bb818af47532",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780bda14411ca0bb818af47532",
            "spotify_id"=> "4DzC4sTTWf2juzeeMiFB8O"
          ],
          [
            "name"=> "Slowberry",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb649b6fa1bc24ffa17dbeb6f5",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174649b6fa1bc24ffa17dbeb6f5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178649b6fa1bc24ffa17dbeb6f5",
            "spotify_id"=> "4I6wXEDAaa18CfmvwMJalK"
          ],
          [
            "name"=> "Booboo Stewart",
            "country"=> "",
            "genre"=> "movie tunes",
            "bg_img"=> "https://i.scdn.co/image/ab6772690000c46ca8c2cf8055dfb5cb8cd0c061",
            "md_img"=> "https://i.scdn.co/image/ab6772690000dd22a8c2cf8055dfb5cb8cd0c061",
            "sm_img"=> "https://i.scdn.co/image/ab6772690000bac3a8c2cf8055dfb5cb8cd0c061",
            "spotify_id"=> "4A6cd63FWHbCLqk9mtGUZZ"
          ],
          [
            "name"=> "TOKYO’S REVENGE",
            "country"=> "",
            "genre"=> "meme rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb624d202f58bbc49cece97952",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174624d202f58bbc49cece97952",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178624d202f58bbc49cece97952",
            "spotify_id"=> "5TbLOwv8BNnik3f03NZJlt"
          ],
          [
            "name"=> "Sagopa Kajmer",
            "country"=> "",
            "genre"=> "turkish hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6eb76d24f4d5055fbf2642c3",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746eb76d24f4d5055fbf2642c3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786eb76d24f4d5055fbf2642c3",
            "spotify_id"=> "1KXTegXtnCPKXjRaX1llcD"
          ],
          [
            "name"=> "Fatboy Slim",
            "country"=> "",
            "genre"=> "big beat",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbbb4a8ed961af5b1989e2b6a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bbb4a8ed961af5b1989e2b6a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bbb4a8ed961af5b1989e2b6a",
            "spotify_id"=> "4Y7tXHSEejGu1vQ9bwDdXW"
          ],
          [
            "name"=> "Marc Seguí",
            "country"=> "",
            "genre"=> "spanish pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9a691796d5911f22cd4ff670",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749a691796d5911f22cd4ff670",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789a691796d5911f22cd4ff670",
            "spotify_id"=> "5FQ8tBUtIamA2hRtatrYUF"
          ],
          [
            "name"=> "Rejjie Snow",
            "country"=> "",
            "genre"=> "indie soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1b7c5e24cde6e6420d5360b4",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741b7c5e24cde6e6420d5360b4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781b7c5e24cde6e6420d5360b4",
            "spotify_id"=> "3lLHpTOJ11tWiUNGYN14gt"
          ],
          [
            "name"=> "Art Silver Trio",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2738a25c663781d8db073482ede",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e028a25c663781d8db073482ede",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048518a25c663781d8db073482ede",
            "spotify_id"=> "1IdNwXpBJIXak2tdHmICgT"
          ],
          [
            "name"=> "Jay Santana",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcf6070bc5320cf3a544628b0",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cf6070bc5320cf3a544628b0",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cf6070bc5320cf3a544628b0",
            "spotify_id"=> "1XIUQxiofz94ucB3cuWs1V"
          ],
          [
            "name"=> "Caitlyn Smith",
            "country"=> "",
            "genre"=> "country pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb32bf29a057ea47ecec309fe2",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517432bf29a057ea47ecec309fe2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17832bf29a057ea47ecec309fe2",
            "spotify_id"=> "3uikSah4dwqwuk0EidFI4R"
          ],
          [
            "name"=> "Muffin Songs",
            "country"=> "",
            "genre"=> "children's music",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273f662ae81484b23dabaf67805",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02f662ae81484b23dabaf67805",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851f662ae81484b23dabaf67805",
            "spotify_id"=> "2PHC7cyBiJM9EZ0E8FKcJ4"
          ],
          [
            "name"=> "Stephen Schwartz",
            "country"=> "",
            "genre"=> "broadway",
            "bg_img"=> "https://i.scdn.co/image/6a9df2fdcda44bc0cd927eb3ad033fb95094751c",
            "md_img"=> "https://i.scdn.co/image/f8155f35f7db365f7f093e1794866c5c3778baf1",
            "sm_img"=> "https://i.scdn.co/image/4a2261c0d2af96375561dcfe87ccfc3318291820",
            "spotify_id"=> "7daPb40K64rRtF36wd3ZOk"
          ],
          [
            "name"=> "Crosby, Stills, Nash & Young",
            "country"=> "",
            "genre"=> "album rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4e5018dad07ee004f171d7d3",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744e5018dad07ee004f171d7d3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784e5018dad07ee004f171d7d3",
            "spotify_id"=> "1CYsQCypByMVgnv17qsSbQ"
          ],
          [
            "name"=> "SCH",
            "country"=> "",
            "genre"=> "french hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebeaa3e5f1530c3f89e1034694",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174eaa3e5f1530c3f89e1034694",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178eaa3e5f1530c3f89e1034694",
            "spotify_id"=> "2kXKa3aAFngGz2P4GjG5w2"
          ],
          [
            "name"=> "Dozy Sounds",
            "country"=> "",
            "genre"=> "color noise",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3446cf8b1862cadfb07b8b4a",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743446cf8b1862cadfb07b8b4a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783446cf8b1862cadfb07b8b4a",
            "spotify_id"=> "6GjywyZ0Qtsu0f95gL5CDG"
          ],
          [
            "name"=> "Secretto",
            "country"=> "",
            "genre"=> "tex-mex",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb47a342090eb50628c1e4f1ba",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517447a342090eb50628c1e4f1ba",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17847a342090eb50628c1e4f1ba",
            "spotify_id"=> "1p2oJls3t03KjBx99Lj2ZQ"
          ],
          [
            "name"=> "Steven Curtis Chapman",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe3226c47736892d994944d84",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e3226c47736892d994944d84",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e3226c47736892d994944d84",
            "spotify_id"=> "3vcFXwLEUdfWMu7gTQKyot"
          ],
          [
            "name"=> "High School Musical Cast",
            "country"=> "",
            "genre"=> "movie tunes",
            "bg_img"=> "https://i.scdn.co/image/77b1746fba24b9bb6395b7574a12841491ebb800",
            "md_img"=> "https://i.scdn.co/image/7301e167b9d81cecec786c7f9f46678b00a3ffb0",
            "sm_img"=> "https://i.scdn.co/image/c6c5f021e98ea0f24e80aaf923624549077d9c99",
            "spotify_id"=> "2gUMs9PE8XZVQyzCDqaYmW"
          ],
          [
            "name"=> "Sadhana Sargam",
            "country"=> "",
            "genre"=> "classic bollywood",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5bff80a5700274b3de628f8a",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745bff80a5700274b3de628f8a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785bff80a5700274b3de628f8a",
            "spotify_id"=> "1HGMG8RHvcu1mfdM9MeTek"
          ],
          [
            "name"=> "Stephen Marley",
            "country"=> "",
            "genre"=> "reggae",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb200689e15f3b95aaf47a05c8",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174200689e15f3b95aaf47a05c8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178200689e15f3b95aaf47a05c8",
            "spotify_id"=> "0CIwCGmQMqHqiblnZlFia1"
          ],
          [
            "name"=> "The 502s",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc957e34a5869c8758b58e927",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c957e34a5869c8758b58e927",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c957e34a5869c8758b58e927",
            "spotify_id"=> "4sIuoDOzSlBqeiNJl631zX"
          ],
          [
            "name"=> "Sawyer Brown",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb9df280aac461f679f254d9c",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b9df280aac461f679f254d9c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b9df280aac461f679f254d9c",
            "spotify_id"=> "50hFWG3MaUUX5phNrrVc97"
          ],
          [
            "name"=> "Silversun Pickups",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd3c9dc38ed243e584ba7cce3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d3c9dc38ed243e584ba7cce3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d3c9dc38ed243e584ba7cce3",
            "spotify_id"=> "6qyi8X6MdP1lu6B1K6yh3h"
          ],
          [
            "name"=> "Stephen Oremus",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273cf59cb30bae10663d53298fc",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02cf59cb30bae10663d53298fc",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851cf59cb30bae10663d53298fc",
            "spotify_id"=> "1e6BRnFiiwNZl04xu1yqmi"
          ],
          [
            "name"=> "Sevendust",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb91dd82319224dd9f0316444d",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517491dd82319224dd9f0316444d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17891dd82319224dd9f0316444d",
            "spotify_id"=> "35Uu85Pq33mK8x1jYqsHY2"
          ],
          [
            "name"=> "She Wants Revenge",
            "country"=> "",
            "genre"=> "dark wave",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb50aa134669090525f467fea9",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517450aa134669090525f467fea9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17850aa134669090525f467fea9",
            "spotify_id"=> "2zRt0sfxNnqI8gLR7d8gWt"
          ],
          [
            "name"=> "The Salsoul Orchestra",
            "country"=> "",
            "genre"=> "disco",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2734dd9bf0479eee9cb54df866a",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e024dd9bf0479eee9cb54df866a",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048514dd9bf0479eee9cb54df866a",
            "spotify_id"=> "0m04NLVsIfjqZMBfw7vTf4"
          ],
          [
            "name"=> "Sara Evans",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe409c650dda163c44462d943",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e409c650dda163c44462d943",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e409c650dda163c44462d943",
            "spotify_id"=> "7qvsLYsYP0MHD7jkdv6DAG"
          ],
          [
            "name"=> "White Noise for Deeper Sleep",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5dd9a57cf9f102942c9ab55a",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745dd9a57cf9f102942c9ab55a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785dd9a57cf9f102942c9ab55a",
            "spotify_id"=> "5wcYaJMgpLDF2IkhFXdIAg"
          ],
          [
            "name"=> "Big Syke",
            "country"=> "",
            "genre"=> "g funk",
            "bg_img"=> "https://i.scdn.co/image/b96ced2ebf0a230e30fc5bb4cbb547f9af6e010c",
            "md_img"=> "https://i.scdn.co/image/d6883ecd7bb23806d5c778c4fbfa97c50da2fabd",
            "sm_img"=> "https://i.scdn.co/image/aa7f4d2f0ec2ea88976d6b9879209efcef66539b",
            "spotify_id"=> "5J32qSlWzKCdcL31B8wglv"
          ],
          [
            "name"=> "Jean Sibelius",
            "country"=> "",
            "genre"=> "classical",
            "bg_img"=> "https://i.scdn.co/image/9bd18051343041184db5c72f965dc81c5f061dc1",
            "md_img"=> "https://i.scdn.co/image/25bb3fb47f341c6dca31355f7450f009acd62990",
            "sm_img"=> "https://i.scdn.co/image/b94dedee9db3fccab08f056e9c3a75c131ed17f1",
            "spotify_id"=> "7jzR5qj8vFnSu5JHaXgFEr"
          ],
          [
            "name"=> "Salmo",
            "country"=> "",
            "genre"=> "italian hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd9bed24492a4dff2edf3749e",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d9bed24492a4dff2edf3749e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d9bed24492a4dff2edf3749e",
            "spotify_id"=> "3hBQ4zniNdQf1cqqo6hzuW"
          ],
          [
            "name"=> "Banda Tierra Sagrada",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3c5684ddf3ce94207aa8d48f",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743c5684ddf3ce94207aa8d48f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783c5684ddf3ce94207aa8d48f",
            "spotify_id"=> "0v7JYEoQOQbzNNESKwxmzT"
          ],
          [
            "name"=> "Sarz",
            "country"=> "",
            "genre"=> "afrobeats",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb979fc40af6af4487a6fa96d6",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174979fc40af6af4487a6fa96d6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178979fc40af6af4487a6fa96d6",
            "spotify_id"=> "408vMm7y1227ASq7GmWygZ"
          ],
          [
            "name"=> "Michael Franti & Spearhead",
            "country"=> "",
            "genre"=> "reggae fusion",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb98d2270897c7444955c74c60",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517498d2270897c7444955c74c60",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17898d2270897c7444955c74c60",
            "spotify_id"=> "1mHuZMOP8FG5ip4yAb1vrB"
          ],
          [
            "name"=> "Water Sound Natural White Noise",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb17c26b885e0ef50e21db17d6",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517417c26b885e0ef50e21db17d6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17817c26b885e0ef50e21db17d6",
            "spotify_id"=> "79Xztd6s33dW9S4V0f4NsQ"
          ],
          [
            "name"=> "Binaural Beats Sleep",
            "country"=> "",
            "genre"=> "binaural",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebeae7c502b5e9e20c2f73146d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174eae7c502b5e9e20c2f73146d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178eae7c502b5e9e20c2f73146d",
            "spotify_id"=> "5C95YXNLyaqbZjhwXMjZ4r"
          ],
          [
            "name"=> "Shallou",
            "country"=> "",
            "genre"=> "electropop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3ed72fcfb0bfbe9677ebbfad",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743ed72fcfb0bfbe9677ebbfad",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783ed72fcfb0bfbe9677ebbfad",
            "spotify_id"=> "7C3Cbtr2PkH2l4tOGhtCsk"
          ],
          [
            "name"=> "El As De La Sierra",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc2ccc225af02a54d037dba30",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c2ccc225af02a54d037dba30",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c2ccc225af02a54d037dba30",
            "spotify_id"=> "6uQMkB156uIN27tFar9qQl"
          ],
          [
            "name"=> "Pawan Singh",
            "country"=> "",
            "genre"=> "bhojpuri pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe71db487008c6c1606435e37",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e71db487008c6c1606435e37",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e71db487008c6c1606435e37",
            "spotify_id"=> "1T7MiVJ2MJlR5GKi11w4VT"
          ],
          [
            "name"=> "St. Paul & The Broken Bones",
            "country"=> "",
            "genre"=> "retro soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd49161e02b909acfefc728ac",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d49161e02b909acfefc728ac",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d49161e02b909acfefc728ac",
            "spotify_id"=> "4fXkvh05wFhuH77MfD4m9o"
          ],
          [
            "name"=> "Sam Fender",
            "country"=> "",
            "genre"=> "modern rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3f024102223561c771cce4ed",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743f024102223561c771cce4ed",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783f024102223561c771cce4ed",
            "spotify_id"=> "6zlR5ttMfMNmwf2lecU9Cc"
          ],
          [
            "name"=> "Kristian Stanfill",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf7957cf1052c4ea53e7e4828",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f7957cf1052c4ea53e7e4828",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f7957cf1052c4ea53e7e4828",
            "spotify_id"=> "61fqRzZ9aHyPeTdUIqEEFx"
          ],
          [
            "name"=> "The Postal Service",
            "country"=> "",
            "genre"=> "chamber pop",
            "bg_img"=> "https://i.scdn.co/image/034778d5916fdfaacf926d7ec0e7440f717cd064",
            "md_img"=> "https://i.scdn.co/image/46ac1554fb4e0fae43f3d83f03dc08c517b513f5",
            "sm_img"=> "https://i.scdn.co/image/04ef659a6346a9c863ef22dcb6a9ab9a27f3b1b4",
            "spotify_id"=> "5yV1qdnmxyIYiSFB02wpDj"
          ],
          [
            "name"=> "Scott Bradlee's Postmodern Jukebox",
            "country"=> "",
            "genre"=> "jazz cover",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf3407105482b4bffb7a641b2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f3407105482b4bffb7a641b2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f3407105482b4bffb7a641b2",
            "spotify_id"=> "5HYNPEO2NNBONQkp3Mvwvc"
          ],
          [
            "name"=> "What So Not",
            "country"=> "",
            "genre"=> "aussietronica",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebdd74be171249197d0e86efa4",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174dd74be171249197d0e86efa4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178dd74be171249197d0e86efa4",
            "spotify_id"=> "4AA8eXtzqh5ykxtafLaPOi"
          ],
          [
            "name"=> "Sugarhill Ddot",
            "country"=> "",
            "genre"=> "new york drill",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc864bfb1addc4d43ab7dfcc2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c864bfb1addc4d43ab7dfcc2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c864bfb1addc4d43ab7dfcc2",
            "spotify_id"=> "63X7mnpy2kfkDtltarrWD1"
          ],
          [
            "name"=> "Jaideep Sahni",
            "country"=> "",
            "genre"=> "modern bollywood",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273825ae4fbebb64fd9f4fd7de1",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02825ae4fbebb64fd9f4fd7de1",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851825ae4fbebb64fd9f4fd7de1",
            "spotify_id"=> "5kPOMQZvgkAEnRZqwn9SYQ"
          ],
          [
            "name"=> "Grupo Samuray",
            "country"=> "",
            "genre"=> "grupera",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2731b83a9265848ee5f45ecb1e7",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e021b83a9265848ee5f45ecb1e7",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048511b83a9265848ee5f45ecb1e7",
            "spotify_id"=> "4k62OskaTa5WApIe7p1XXR"
          ],
          [
            "name"=> "Sisqo",
            "country"=> "",
            "genre"=> "contemporary r&b",
            "bg_img"=> "https://i.scdn.co/image/65c4f2d897d65c2236ddc7ab761887910f8ac02f",
            "md_img"=> "https://i.scdn.co/image/4aed80b41410e15695438b0dc1e54805a92873b2",
            "sm_img"=> "https://i.scdn.co/image/0e7a36cd6eeddbe4148576fb19eeee46183f3cd1",
            "spotify_id"=> "6x9QLdzo6eBZxJ1bHsDkjg"
          ],
          [
            "name"=> "Tmsoft’s White Noise Sleep Sounds",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcdb401fd3f3ff97656288b17",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cdb401fd3f3ff97656288b17",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cdb401fd3f3ff97656288b17",
            "spotify_id"=> "3HykQi5PlnOTB8tjm11KkK"
          ],
          [
            "name"=> "Scoun",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfb89e024498bc1332a81412b",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fb89e024498bc1332a81412b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fb89e024498bc1332a81412b",
            "spotify_id"=> "77wxSvtu0ClPRN07MoJBZ7"
          ],
          [
            "name"=> "SOB X RBE",
            "country"=> "",
            "genre"=> "cali rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb24e6f9ce2527f8241ee1947d",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517424e6f9ce2527f8241ee1947d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17824e6f9ce2527f8241ee1947d",
            "spotify_id"=> "2TImI3DW7o5MdRXJs4D37h"
          ],
          [
            "name"=> "Sticky Fingers",
            "country"=> "",
            "genre"=> "australian reggae fusion",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb21ebb7e4085f6c9765fbe9a5",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517421ebb7e4085f6c9765fbe9a5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17821ebb7e4085f6c9765fbe9a5",
            "spotify_id"=> "3ZGr7nQBXDU2WhyXgRVbt0"
          ],
          [
            "name"=> "Harry Simeone Chorale",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273a9704a090d7c0675f9c67977",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e022666278077af32a45056d699",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048512666278077af32a45056d699",
            "spotify_id"=> "30orN5PtRhj9fN2Myr8HKV"
          ],
          [
            "name"=> "Sachet-Parampara",
            "country"=> "",
            "genre"=> "desi pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9415df28058107b5d54f9fad",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749415df28058107b5d54f9fad",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789415df28058107b5d54f9fad",
            "spotify_id"=> "1SyKki7JI1AZNKwgNMkn25"
          ],
          [
            "name"=> "North Star Notesmiths",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb249ec1f28fee6bb3094b4a31",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174249ec1f28fee6bb3094b4a31",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178249ec1f28fee6bb3094b4a31",
            "spotify_id"=> "7sLgNMPOyAdHhmfr8G2wKX"
          ],
          [
            "name"=> "ISO Supremacy",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5d578c801d6aff3be92f024b",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745d578c801d6aff3be92f024b",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785d578c801d6aff3be92f024b",
            "spotify_id"=> "6rUez8y21xlLrYKExcXB1X"
          ],
          [
            "name"=> "Devi Sri Prasad",
            "country"=> "",
            "genre"=> "tollywood",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebaa5350248841ba12e12467af",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174aa5350248841ba12e12467af",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178aa5350248841ba12e12467af",
            "spotify_id"=> "5sSzCxHtgL82pYDvx2QyEU"
          ],
          [
            "name"=> "Big Soto",
            "country"=> "",
            "genre"=> "trap latino",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4665dc1e340d55110233087c",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744665dc1e340d55110233087c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784665dc1e340d55110233087c",
            "spotify_id"=> "2TQ4CGgxxCWHqa9yYIGDoU"
          ],
          [
            "name"=> "Salve Malak",
            "country"=> "",
            "genre"=> "pop rap brasileiro",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb70e0911e8d9d499151d8c972",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517470e0911e8d9d499151d8c972",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17870e0911e8d9d499151d8c972",
            "spotify_id"=> "7zxFc10N9BP2lg73b8cwZ0"
          ],
          [
            "name"=> "Rain Fruits Sounds",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebced0c3b8711ea8745f577df0",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ced0c3b8711ea8745f577df0",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ced0c3b8711ea8745f577df0",
            "spotify_id"=> "5OQTGVAJnAH4u8MIOXUA7Y"
          ],
          [
            "name"=> "Michael Schulte",
            "country"=> "",
            "genre"=> "german pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebac85e7124f7eb21ec3840b48",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ac85e7124f7eb21ec3840b48",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ac85e7124f7eb21ec3840b48",
            "spotify_id"=> "21aa4pj9BvbFB2iT8kRpnq"
          ],
          [
            "name"=> "Samuray",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe4fb190121f20cdccabe0843",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e4fb190121f20cdccabe0843",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e4fb190121f20cdccabe0843",
            "spotify_id"=> "6fBjnfeYEU3VFuQl8RPrp8"
          ],
          [
            "name"=> "Sound Bath",
            "country"=> "",
            "genre"=> "binaural",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe4f1a22d2cfa7ee945523a4d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e4f1a22d2cfa7ee945523a4d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e4f1a22d2cfa7ee945523a4d",
            "spotify_id"=> "1wuPfTKt5zzbZixeifF5DO"
          ],
          [
            "name"=> "Tash Sultana",
            "country"=> "",
            "genre"=> "australian reggae fusion",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb54d257d8eb855d8552bf402c",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517454d257d8eb855d8552bf402c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17854d257d8eb855d8552bf402c",
            "spotify_id"=> "6zVFRTB0Y1whWyH7ZNmywf"
          ],
          [
            "name"=> "Tegan and Sara",
            "country"=> "",
            "genre"=> "canadian indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb6517a925a998cfebdecc8bd",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b6517a925a998cfebdecc8bd",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b6517a925a998cfebdecc8bd",
            "spotify_id"=> "5e1BZulIiYWPRm8yogwUYH"
          ],
          [
            "name"=> "Sultan + Shepard",
            "country"=> "",
            "genre"=> "canadian electronic",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb874fae52f3a667f421faaf65",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174874fae52f3a667f421faaf65",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178874fae52f3a667f421faaf65",
            "spotify_id"=> "14Tg9FvbNismPR1PJHxRau"
          ],
          [
            "name"=> "Tiwa Savage",
            "country"=> "",
            "genre"=> "afrobeats",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba1249cdde9d1e7b53148fcde",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a1249cdde9d1e7b53148fcde",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a1249cdde9d1e7b53148fcde",
            "spotify_id"=> "1hNaHKp2Za5YdOAG0WnRbc"
          ],
          [
            "name"=> "Sujatha",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1515f0d5724076f9cfaf8b27",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741515f0d5724076f9cfaf8b27",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781515f0d5724076f9cfaf8b27",
            "spotify_id"=> "2JEjaa7hWhE1BbL3OcoeFR"
          ],
          [
            "name"=> "Aleks Syntek",
            "country"=> "",
            "genre"=> "latin arena pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb42f305eae2574365774fbb6a",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517442f305eae2574365774fbb6a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17842f305eae2574365774fbb6a",
            "spotify_id"=> "0r8toju2ecKaVtItkzAnNi"
          ],
          [
            "name"=> "Elena Siegman",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273f5d0147a87a1604e91d5ce55",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02f5d0147a87a1604e91d5ce55",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851f5d0147a87a1604e91d5ce55",
            "spotify_id"=> "6BlZkvGwQyo011poQEhQ1J"
          ],
          [
            "name"=> "Steve Edwards",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273c272f11aee228a5089cb4501",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02c272f11aee228a5089cb4501",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851c272f11aee228a5089cb4501",
            "spotify_id"=> "2SwhNukah1MYpLR594PnuC"
          ],
          [
            "name"=> "Sam & Dave",
            "country"=> "",
            "genre"=> "classic soul",
            "bg_img"=> "https://i.scdn.co/image/b1f68bdefbe49b474c9aac457114aac70d06f880",
            "md_img"=> "https://i.scdn.co/image/a3cefb27c2aad573e4dae048effaa9cae6af7268",
            "sm_img"=> "https://i.scdn.co/image/4b3c227ca32325f7d12ef75db8f5a6e5222be441",
            "spotify_id"=> "2BVYdY4PyfCF9z4NrkhEB2"
          ],
          [
            "name"=> "State of Waves",
            "country"=> "",
            "genre"=> "white noise",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273be13153d5730236f1a019a46",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02be13153d5730236f1a019a46",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851be13153d5730236f1a019a46",
            "spotify_id"=> "1qC3nE1aPdL2nJ41op52RY"
          ],
          [
            "name"=> "Scissor Sisters",
            "country"=> "",
            "genre"=> "dance pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb064aceda61eac4b617a9ad3f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174064aceda61eac4b617a9ad3f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178064aceda61eac4b617a9ad3f",
            "spotify_id"=> "3Y10boYzeuFCJ4Qgp53w6o"
          ],
          [
            "name"=> "Dmitri Shostakovich",
            "country"=> "",
            "genre"=> "classical",
            "bg_img"=> "https://i.scdn.co/image/28f745db0a77d0e70db1c0be305f51b3478706aa",
            "md_img"=> "https://i.scdn.co/image/3143699abed78aabe8b09712c72cf8b9c5615e1e",
            "sm_img"=> "https://i.scdn.co/image/3034f42133ac025f1298ad3be0a49f75895d72aa",
            "spotify_id"=> "6s1pCNXcbdtQJlsnM1hRIA"
          ],
          [
            "name"=> "Soul For Real",
            "country"=> "",
            "genre"=> "boy band",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb063dda12f72a2c472b83d5f4",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174063dda12f72a2c472b83d5f4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178063dda12f72a2c472b83d5f4",
            "spotify_id"=> "296LotOmbj7eOX7r9l46fK"
          ],
          [
            "name"=> "Old Crow Medicine Show",
            "country"=> "",
            "genre"=> "indie folk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6b81cdf4c7c60551f584f740",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746b81cdf4c7c60551f584f740",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786b81cdf4c7c60551f584f740",
            "spotify_id"=> "4DBi4EYXgiqbkxvWUXUzMi"
          ],
          [
            "name"=> "The Lovin' Spoonful",
            "country"=> "",
            "genre"=> "bubblegum pop",
            "bg_img"=> "https://i.scdn.co/image/d0fc74cb2e10858c1b0b2436e6f14cee0944f8df",
            "md_img"=> "https://i.scdn.co/image/9cfeac22d552b1fdd4ce693ebacda71ba709543b",
            "sm_img"=> "https://i.scdn.co/image/c5691f2ab0192da30ee918b9ee39d090600c9e6b",
            "spotify_id"=> "7CCn4PFRRRZF127jtCBAUe"
          ],
          [
            "name"=> "No Spirit",
            "country"=> "",
            "genre"=> "lo-fi beats",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfc1279efe2524dd77279951f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fc1279efe2524dd77279951f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fc1279efe2524dd77279951f",
            "spotify_id"=> "4XbnhifKeOnyfTsCInrQsX"
          ],
          [
            "name"=> "The Brian Setzer Orchestra",
            "country"=> "",
            "genre"=> "heartland rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb60ea7f13ea054cd06daafdfc",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517460ea7f13ea054cd06daafdfc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17860ea7f13ea054cd06daafdfc",
            "spotify_id"=> "7HQH1SJokcVMdstilKJ2S8"
          ],
          [
            "name"=> "Twinkle Twinkle Little Rock Star",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb07d87d7977d69144163b543d",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517407d87d7977d69144163b543d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17807d87d7977d69144163b543d",
            "spotify_id"=> "3mGCLimuzOdod4Lnegny4d"
          ],
          [
            "name"=> "Spiritual Flower",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273fe7c6d16481e63bacdcd4aeb",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02fe7c6d16481e63bacdcd4aeb",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851fe7c6d16481e63bacdcd4aeb",
            "spotify_id"=> "2dTY9wbqtzL3gDLrffNlmm"
          ],
          [
            "name"=> "Nick Cave & The Bad Seeds",
            "country"=> "",
            "genre"=> "alternative rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebee32d7c5cec25d73f884eba5",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ee32d7c5cec25d73f884eba5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ee32d7c5cec25d73f884eba5",
            "spotify_id"=> "4UXJsSlnKd7ltsrHebV79Q"
          ],
          [
            "name"=> "Senses Fail",
            "country"=> "",
            "genre"=> "emo",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb29fb2ce01171457c13652a1f",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517429fb2ce01171457c13652a1f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17829fb2ce01171457c13652a1f",
            "spotify_id"=> "591yCCsZCLXvaJ0Rg38vLZ"
          ],
          [
            "name"=> "PR1SVX",
            "country"=> "",
            "genre"=> "sped up",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8f2b1e9326f772da372cdffc",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748f2b1e9326f772da372cdffc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788f2b1e9326f772da372cdffc",
            "spotify_id"=> "12NSBgMVPKhwB8tDMsoYpP"
          ],
          [
            "name"=> "Sam Tompkins",
            "country"=> "",
            "genre"=> "singer-songwriter pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe178f202b5bbc95147d7c1a7",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e178f202b5bbc95147d7c1a7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e178f202b5bbc95147d7c1a7",
            "spotify_id"=> "04uu8U3I1h26Fp2NBkPTRZ"
          ],
          [
            "name"=> "Brennan Savage",
            "country"=> "",
            "genre"=> "cloud rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba56b57d482d506634afe8e01",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a56b57d482d506634afe8e01",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a56b57d482d506634afe8e01",
            "spotify_id"=> "6SSmy635N3a4oWmPk85xpK"
          ],
          [
            "name"=> "Ximena Sariñana",
            "country"=> "",
            "genre"=> "cantautora mexicana",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3769a26bbfcf734c80590652",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743769a26bbfcf734c80590652",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783769a26bbfcf734c80590652",
            "spotify_id"=> "7plUpXSFcSJUZSiZAoXqr1"
          ],
          [
            "name"=> "Slim Jxmmi",
            "country"=> "",
            "genre"=> "trap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0f8d832dfa56744c867179c8",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740f8d832dfa56744c867179c8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780f8d832dfa56744c867179c8",
            "spotify_id"=> "7EEiVZvj6RCEtVX2F2pyxu"
          ],
          [
            "name"=> "Denzel Sachs",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebdf410d9fb95de5338774adbf",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174df410d9fb95de5338774adbf",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178df410d9fb95de5338774adbf",
            "spotify_id"=> "3SB6ICG4p7cvBEjSLNSBMw"
          ],
          [
            "name"=> "Carlos Santana",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/e1bfc98896b3638caa59ef227d52fb1a2208375d",
            "md_img"=> "https://i.scdn.co/image/36b4bd204c7803d0ec334b9952184e79787fbaf6",
            "sm_img"=> "https://i.scdn.co/image/d41c125bdfcd8b1bec35da4821f8b863a7d21e5b",
            "spotify_id"=> "0MsXN56oNCyqorqEPViWgQ"
          ],
          [
            "name"=> "SpotemGottem",
            "country"=> "",
            "genre"=> "florida drill",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5c5b1d5789f15cf42738fb66",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745c5b1d5789f15cf42738fb66",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785c5b1d5789f15cf42738fb66",
            "spotify_id"=> "3Y2MLcrD3ZQXRXmtn4fZQx"
          ],
          [
            "name"=> "Cosmo Sheldrake",
            "country"=> "",
            "genre"=> "pov: indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3fb8d97d048bcafe658cf839",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743fb8d97d048bcafe658cf839",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783fb8d97d048bcafe658cf839",
            "spotify_id"=> "6hV6oxGLeLFw17DGjIPkYD"
          ],
          [
            "name"=> "Sex Bob-Omb",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "",
            "md_img"=> "",
            "sm_img"=> "",
            "spotify_id"=> "0epidpyARaIPmKpFUwcgnJ"
          ],
          [
            "name"=> "Stileto",
            "country"=> "",
            "genre"=> "dark r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb11101cfb89b31fb77110a08a",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517411101cfb89b31fb77110a08a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17811101cfb89b31fb77110a08a",
            "spotify_id"=> "2iwUUr9Udu8z6L2ZJcYr6i"
          ],
          [
            "name"=> "Santino Fontana",
            "country"=> "",
            "genre"=> "movie tunes",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbf591218adebbf576d52e665",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bf591218adebbf576d52e665",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bf591218adebbf576d52e665",
            "spotify_id"=> "47NluEnhJda2gsnjuvcoob"
          ],
          [
            "name"=> "Scott Dunn",
            "country"=> "",
            "genre"=> "american classical piano",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf093e8c29ea6970a0e2e571a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f093e8c29ea6970a0e2e571a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f093e8c29ea6970a0e2e571a",
            "spotify_id"=> "1CULc0qvcbzrAU9R8OK0J1"
          ],
          [
            "name"=> "Bubba Sparxxx",
            "country"=> "",
            "genre"=> "atl hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfeae893ef5a2e644b97c1cf9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174feae893ef5a2e644b97c1cf9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178feae893ef5a2e644b97c1cf9",
            "spotify_id"=> "3RPYHNSwe3w0mtfJwKIN9P"
          ],
          [
            "name"=> "Sheila On 7",
            "country"=> "",
            "genre"=> "indonesian alternative rock",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27354270208627aa8061a8abe21",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0254270208627aa8061a8abe21",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485154270208627aa8061a8abe21",
            "spotify_id"=> "6q87vizIEdEN4NvlR6mjfT"
          ],
          [
            "name"=> "Joaquín Sabina",
            "country"=> "",
            "genre"=> "cantautor",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd30f9a429e2aa4eb9d1ddf21",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d30f9a429e2aa4eb9d1ddf21",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d30f9a429e2aa4eb9d1ddf21",
            "spotify_id"=> "4aeIWo5CMF1uRmqgJdwkZW"
          ],
          [
            "name"=> "Stars Music Chile",
            "country"=> "",
            "genre"=> "urbano chileno",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd6aba60c6c806583f0928345",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d6aba60c6c806583f0928345",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d6aba60c6c806583f0928345",
            "spotify_id"=> "2NZD6Gqfk60GEcAAnJKVsR"
          ],
          [
            "name"=> "La Sonora Santanera",
            "country"=> "",
            "genre"=> "bolero",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7f9c1f307093e17a7b3eedcb",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747f9c1f307093e17a7b3eedcb",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787f9c1f307093e17a7b3eedcb",
            "spotify_id"=> "3CsPxFJGyNa9ep79CFWN77"
          ],
          [
            "name"=> "Barry Can't Swim",
            "country"=> "",
            "genre"=> "jazz house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd81928154288fe971461b05d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d81928154288fe971461b05d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d81928154288fe971461b05d",
            "spotify_id"=> "0vTVU0KH0CVzijsoKGsTPl"
          ],
          [
            "name"=> "Martin Solveig",
            "country"=> "",
            "genre"=> "disco house",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba52eb06f379c045f7fe389d9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a52eb06f379c045f7fe389d9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a52eb06f379c045f7fe389d9",
            "spotify_id"=> "1bj5GrcLom5gZFF5t949Xl"
          ],
          [
            "name"=> "Bipolar Sunshine",
            "country"=> "",
            "genre"=> "gauze pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebddb7e5b029a90a3a86161090",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ddb7e5b029a90a3a86161090",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ddb7e5b029a90a3a86161090",
            "spotify_id"=> "0CjWKoS55T7DOt0HJuwF1H"
          ],
          [
            "name"=> "Mellow Strings",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9ac41bef05ae76e8e7f0f47d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749ac41bef05ae76e8e7f0f47d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789ac41bef05ae76e8e7f0f47d",
            "spotify_id"=> "0YpXDLh8xp0ojwc1GBKCxC"
          ],
          [
            "name"=> "Hail The Sun",
            "country"=> "",
            "genre"=> "progressive post-hardcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8bda9cca15453671d49d19a4",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748bda9cca15453671d49d19a4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788bda9cca15453671d49d19a4",
            "spotify_id"=> "0XblvrTo6mnHOxWIP1t5T6"
          ],
          [
            "name"=> "SleepTherapy",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfe4aa83e462cab24c6c047a4",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fe4aa83e462cab24c6c047a4",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fe4aa83e462cab24c6c047a4",
            "spotify_id"=> "6lmrCOEWctZj9LghJ9wxuv"
          ],
          [
            "name"=> "Steve Hall",
            "country"=> "",
            "genre"=> "christmas instrumental",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4cc8b874391cbbe38390057d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744cc8b874391cbbe38390057d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784cc8b874391cbbe38390057d",
            "spotify_id"=> "1svnNTGU5TClzw5tKnuvfT"
          ],
          [
            "name"=> "S3RL",
            "country"=> "",
            "genre"=> "australian dance",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3c89a570ef6478b9856cf1da",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743c89a570ef6478b9856cf1da",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783c89a570ef6478b9856cf1da",
            "spotify_id"=> "11aa081aKYUzmeFm0yHdT2"
          ],
          [
            "name"=> "Yoko Shimomura",
            "country"=> "",
            "genre"=> "chiptune",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273793e0fabd5474507ee081532",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02f12e9091af7a7626f1bf37db",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851793e0fabd5474507ee081532",
            "spotify_id"=> "2uDsUIyCIqk9wKj17I8WAH"
          ],
          [
            "name"=> "Neeraj Shridhar",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273aca38bbbc4bdaa23155b4802",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02fc5a37ad17e22fc8c7934ab3",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851aca38bbbc4bdaa23155b4802",
            "spotify_id"=> "3tHD07u1ON4uHxmnT9rwqZ"
          ],
          [
            "name"=> "THE SCOTTS",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd51dd9e8a876c829dedcc8d1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d51dd9e8a876c829dedcc8d1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d51dd9e8a876c829dedcc8d1",
            "spotify_id"=> "2PaZWGu5T5nHjY2xxAkFsT"
          ],
          [
            "name"=> "Sassy Scene",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb464bfdb344b384798253fe8e",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174464bfdb344b384798253fe8e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178464bfdb344b384798253fe8e",
            "spotify_id"=> "3cSPgd8Zh82U1uV7weU8Dm"
          ],
          [
            "name"=> "Natural Sound Makers",
            "country"=> "",
            "genre"=> "rain",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb31c7b934cd6554c50e91dec9",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517431c7b934cd6554c50e91dec9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17831c7b934cd6554c50e91dec9",
            "spotify_id"=> "3Af6nKYYghPjQMNzRgVXe8"
          ],
          [
            "name"=> "Charlotte Sands",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb35ad4c89ab80352cdc6e218a",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517435ad4c89ab80352cdc6e218a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17835ad4c89ab80352cdc6e218a",
            "spotify_id"=> "2cAXhrWAztXGwk6r15ibW2"
          ],
          [
            "name"=> "Semisonic",
            "country"=> "",
            "genre"=> "pop rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcbac00ef1ac185c67665e970",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cbac00ef1ac185c67665e970",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cbac00ef1ac185c67665e970",
            "spotify_id"=> "1TqQi97nqeiuOJrIFv5Sw0"
          ],
          [
            "name"=> "Sevyn Streeter",
            "country"=> "",
            "genre"=> "hip pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb828eb691b7b2f505895be472",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174828eb691b7b2f505895be472",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178828eb691b7b2f505895be472",
            "spotify_id"=> "6If57j6e3TXXk0HiLcIZca"
          ],
          [
            "name"=> "White Noise Baby Sleep Music",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273a782158763e14e7bba4f0ca5",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02a782158763e14e7bba4f0ca5",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851a782158763e14e7bba4f0ca5",
            "spotify_id"=> "6N8XGdHPHPjyTm4O5lQQ5t"
          ],
          [
            "name"=> "Sam Butera & The Witnesses",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfd7681981580a68ae9770f64",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fd7681981580a68ae9770f64",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fd7681981580a68ae9770f64",
            "spotify_id"=> "70njzKgLbLbWkCPhKEu2oV"
          ],
          [
            "name"=> "Matt Stell",
            "country"=> "",
            "genre"=> "arkansas country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2fcc794ea0ea4b4f50932579",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742fcc794ea0ea4b4f50932579",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782fcc794ea0ea4b4f50932579",
            "spotify_id"=> "7EekKnlf2HwNaLLpL9Cpgy"
          ],
          [
            "name"=> "Booker T. & the M.G.'s",
            "country"=> "",
            "genre"=> "blues",
            "bg_img"=> "https://i.scdn.co/image/386f66b89b4b1ca0e9b5b2d0ffce9ce3a66a7101",
            "md_img"=> "https://i.scdn.co/image/99990becabb08ca98877631d0e14fe92326721e3",
            "sm_img"=> "https://i.scdn.co/image/5594e8563ac891f9102d64014eb9f66587f79bc1",
            "spotify_id"=> "2vDV0T8sxx2ENnKXds75e5"
          ],
          [
            "name"=> "Green Noise For Sleep",
            "country"=> "",
            "genre"=> "color noise",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2737937f559622d9c023f8d3237",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e027937f559622d9c023f8d3237",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048517937f559622d9c023f8d3237",
            "spotify_id"=> "38SWhNBDTM7Y2pYFkkKkkz"
          ],
          [
            "name"=> "Social Distortion",
            "country"=> "",
            "genre"=> "punk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb233cfb91e84bc512c6456fde",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174233cfb91e84bc512c6456fde",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178233cfb91e84bc512c6456fde",
            "spotify_id"=> "16nn7kCHPWIB6uK09GQCNI"
          ],
          [
            "name"=> "Saint Stupid",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1a6707a419a95b66f60bcf72",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741a6707a419a95b66f60bcf72",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781a6707a419a95b66f60bcf72",
            "spotify_id"=> "1RFYoZzZ5xw3Ddeyr0z65O"
          ],
          [
            "name"=> "Simba La Rue",
            "country"=> "",
            "genre"=> "drill italiana",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebea3d9016681fa13d8546bbe8",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ea3d9016681fa13d8546bbe8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ea3d9016681fa13d8546bbe8",
            "spotify_id"=> "2PEMswqQspTSsAltdeF5kO"
          ],
          [
            "name"=> "southstar",
            "country"=> "",
            "genre"=> "pop dance",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbad7f7eae2f6d5573db9cb3d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bad7f7eae2f6d5573db9cb3d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bad7f7eae2f6d5573db9cb3d",
            "spotify_id"=> "1GVuCyb4PlArufUZDUnRQi"
          ],
          [
            "name"=> "Sub Focus",
            "country"=> "",
            "genre"=> "dancefloor dnb",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb17479647ed32e627fea35cda",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517417479647ed32e627fea35cda",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17817479647ed32e627fea35cda",
            "spotify_id"=> "0QaSiI5TLA4N7mcsdxShDO"
          ],
          [
            "name"=> "A Flock Of Seagulls",
            "country"=> "",
            "genre"=> "new romantic",
            "bg_img"=> "https://i.scdn.co/image/0e0b74658f7e16190f23d795648c888c4dd40f2a",
            "md_img"=> "https://i.scdn.co/image/1c3f527c25f4e3bebccf04704414046e9f0c7e52",
            "sm_img"=> "https://i.scdn.co/image/fdab1b90bd2fc73b64b374998a407d79877d1f73",
            "spotify_id"=> "0uAjBatvB4ubpd4kCfjmNt"
          ],
          [
            "name"=> "Ryan Stevenson",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebec567958381c9fcdb35d0799",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ec567958381c9fcdb35d0799",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ec567958381c9fcdb35d0799",
            "spotify_id"=> "1rxhmvc4pue9A2fEXnLT97"
          ],
          [
            "name"=> "Oh so Tired",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb99ffcd040ef2269597fd7fc7",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517499ffcd040ef2269597fd7fc7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17899ffcd040ef2269597fd7fc7",
            "spotify_id"=> "5eFPHnsK0zatL1oEGn6rzX"
          ],
          [
            "name"=> "Sidewalk Prophets",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1c1d06c32fc7780504bd5953",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741c1d06c32fc7780504bd5953",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781c1d06c32fc7780504bd5953",
            "spotify_id"=> "2SMYoM2Kbcj6rI6U3FRc4U"
          ],
          [
            "name"=> "Sepultura",
            "country"=> "",
            "genre"=> "alternative metal",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb716f574b796045f28ce4f4f3",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174716f574b796045f28ce4f4f3",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178716f574b796045f28ce4f4f3",
            "spotify_id"=> "6JW8wliOEwaDZ231ZY7cf4"
          ],
          [
            "name"=> "Indigo De Souza",
            "country"=> "",
            "genre"=> "asheville indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebaee08f28d7c31a45559e7140",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174aee08f28d7c31a45559e7140",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178aee08f28d7c31a45559e7140",
            "spotify_id"=> "3ir2pF2mkiEWqyPenKTh5e"
          ],
          [
            "name"=> "Capcom Sound Team",
            "country"=> "",
            "genre"=> "japanese vgm",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2738ff64fe4faca2b8f2c79a978",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e028ff64fe4faca2b8f2c79a978",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048518ff64fe4faca2b8f2c79a978",
            "spotify_id"=> "3w1Q754jb31h5CXQCcnLNL"
          ],
          [
            "name"=> "Judy Santos",
            "country"=> "",
            "genre"=> "bachata",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc9955e173c4d26016720778a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c9955e173c4d26016720778a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c9955e173c4d26016720778a",
            "spotify_id"=> "1seU2dut8PjGSZbgrPl7by"
          ],
          [
            "name"=> "Granger Smith",
            "country"=> "",
            "genre"=> "classic texas country",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcb876755c0caa95e63994394",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174cb876755c0caa95e63994394",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178cb876755c0caa95e63994394",
            "spotify_id"=> "4sTFGCigAQIUiEy8wSSQNF"
          ],
          [
            "name"=> "Tommy James & The Shondells",
            "country"=> "",
            "genre"=> "bubblegum pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb510f182fe0230dc7beacaee0",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174510f182fe0230dc7beacaee0",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178510f182fe0230dc7beacaee0",
            "spotify_id"=> "01hRNr3yF5bYnPq4wZ88iI"
          ],
          [
            "name"=> "SVDDEN DEATH",
            "country"=> "",
            "genre"=> "deathstep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb031876ee5cc81c51fbb919c9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174031876ee5cc81c51fbb919c9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178031876ee5cc81c51fbb919c9",
            "spotify_id"=> "2u01kCKA5wDvvztuH8lyT0"
          ],
          [
            "name"=> "Irvin Smith",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb528d15c148b06c9cab482a4f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174528d15c148b06c9cab482a4f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178528d15c148b06c9cab482a4f",
            "spotify_id"=> "72epe9asXn1RtuXkKrtBcE"
          ],
          [
            "name"=> "Spin Doctors",
            "country"=> "",
            "genre"=> "pop rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb407e011fe4e9100c670c0074",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174407e011fe4e9100c670c0074",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178407e011fe4e9100c670c0074",
            "spotify_id"=> "2PSiyldxmJze7xiqbz658m"
          ],
          [
            "name"=> "Shakthisree Gopalan",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba4aed358506f8ced29af53a5",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a4aed358506f8ced29af53a5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a4aed358506f8ced29af53a5",
            "spotify_id"=> "7zAp0JbkavFg2rcMGvANtP"
          ],
          [
            "name"=> "Scene Queen",
            "country"=> "",
            "genre"=> "alt z",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd6a8d75e788906652c520251",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d6a8d75e788906652c520251",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d6a8d75e788906652c520251",
            "spotify_id"=> "6WandyxeDxlcOTwxtnTKP4"
          ],
          [
            "name"=> "Styles Of Beyond",
            "country"=> "",
            "genre"=> "cali rap",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2732f716a30503328ac4df56231",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e022f716a30503328ac4df56231",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048512f716a30503328ac4df56231",
            "spotify_id"=> "5bf6yYgHODBW5EreBZshpX"
          ],
          [
            "name"=> "Sleepy Tom",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb3a05f7d9f36fa4d6903de32",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b3a05f7d9f36fa4d6903de32",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b3a05f7d9f36fa4d6903de32",
            "spotify_id"=> "03Tk5nZMEoqaWZOXoiN7Km"
          ],
          [
            "name"=> "sleepy planet",
            "country"=> "",
            "genre"=> "sleep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb92f92ca49d6a34eb84297dc9",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517492f92ca49d6a34eb84297dc9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17892f92ca49d6a34eb84297dc9",
            "spotify_id"=> "1SaTdsz7hf1sjBJPBqPZR9"
          ],
          [
            "name"=> "SOJA",
            "country"=> "",
            "genre"=> "east coast reggae",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb63249f1bc63ff8d4205efbc8",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517463249f1bc63ff8d4205efbc8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17863249f1bc63ff8d4205efbc8",
            "spotify_id"=> "2vaWvC8suCFkRXejDOK7EE"
          ],
          [
            "name"=> "SEKAI NO OWARI",
            "country"=> "",
            "genre"=> "anime",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3bdc84aa8946d4d06fe2e144",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743bdc84aa8946d4d06fe2e144",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783bdc84aa8946d4d06fe2e144",
            "spotify_id"=> "7HwzlRPa9Ad0I8rK0FPzzK"
          ],
          [
            "name"=> "Steve Luke & Holloway",
            "country"=> "",
            "genre"=> "background jazz",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273b5cf9bcefc5fa9a3c24e4a32",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02b5cf9bcefc5fa9a3c24e4a32",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851b5cf9bcefc5fa9a3c24e4a32",
            "spotify_id"=> "4rK2sefIZVrvpsz6MoXKvY"
          ],
          [
            "name"=> "Flows of Sleep",
            "country"=> "",
            "genre"=> "rain",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8de6f10bb4359a852b00c920",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748de6f10bb4359a852b00c920",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788de6f10bb4359a852b00c920",
            "spotify_id"=> "1MAazf048soVcELWMYehho"
          ],
          [
            "name"=> "Vancouver Sleep Clinic",
            "country"=> "",
            "genre"=> "vapor pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb79471c7506e3c12bd52cc616",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517479471c7506e3c12bd52cc616",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17879471c7506e3c12bd52cc616",
            "spotify_id"=> "77BznF1Dr1k5KyEZ6Nn3jB"
          ],
          [
            "name"=> "Sheppard",
            "country"=> "",
            "genre"=> "australian indie",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4213569798d691ccce6dfec9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744213569798d691ccce6dfec9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784213569798d691ccce6dfec9",
            "spotify_id"=> "6VxCmtR7S3yz4vnzsJqhSV"
          ],
          [
            "name"=> "Vida Sana",
            "country"=> "",
            "genre"=> "healing hz",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb303a7e7ef1d2e22a5ac914d9",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174303a7e7ef1d2e22a5ac914d9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178303a7e7ef1d2e22a5ac914d9",
            "spotify_id"=> "7Ml4V1XFb1OtNxB7gmmb5l"
          ],
          [
            "name"=> "Jo Stafford",
            "country"=> "",
            "genre"=> "torch song",
            "bg_img"=> "https://i.scdn.co/image/8e86114be76f1cb4fb5d73607768d41d894ddf8b",
            "md_img"=> "https://i.scdn.co/image/3e0a1bcee8d16322d9828eb42e2154b52557c42d",
            "sm_img"=> "https://i.scdn.co/image/d3329320c0066cd7a30f0d38d5cbe41e38fff7d5",
            "spotify_id"=> "1Jqk46QvzUn7SnwmTGX6Cw"
          ],
          [
            "name"=> "Elliott Jack Sansom",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb0dcaf4be61111f493b160218",
            "md_img"=> "https://i.scdn.co/image/ab676161000051740dcaf4be61111f493b160218",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1780dcaf4be61111f493b160218",
            "spotify_id"=> "22WxwAyT9U9wWsKA7ToO7K"
          ],
          [
            "name"=> "Sammy Kershaw",
            "country"=> "",
            "genre"=> "contemporary country",
            "bg_img"=> "https://i.scdn.co/image/3d269be9b0dc99650e8a42a0ecd715086bb21e56",
            "md_img"=> "https://i.scdn.co/image/4f766e3cccf02228d3e711b5450b6d33ede69a7b",
            "sm_img"=> "https://i.scdn.co/image/237dbd28f92b1beb63b5d7ad76b2b743df44f44e",
            "spotify_id"=> "3tkZthBATD0S45hm1DmB2O"
          ],
          [
            "name"=> "Savage",
            "country"=> "",
            "genre"=> "nz hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb2df2b389f5e66fa31a8fa79",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b2df2b389f5e66fa31a8fa79",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b2df2b389f5e66fa31a8fa79",
            "spotify_id"=> "1GbrJTB56Xs4XQGlmVbaCf"
          ],
          [
            "name"=> "Cali Life Style",
            "country"=> "",
            "genre"=> "chicano rap",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27341be5d51971bb4e20f6968be",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0241be5d51971bb4e20f6968be",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485141be5d51971bb4e20f6968be",
            "spotify_id"=> "3E2UDuBBn7uLqOz30oWEQu"
          ],
          [
            "name"=> "Fire Sounds",
            "country"=> "",
            "genre"=> "sound",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2735332a463b10872b282c17143",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e025332a463b10872b282c17143",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048515332a463b10872b282c17143",
            "spotify_id"=> "5O87bc3ld6OLoJTFE6gBUW"
          ],
          [
            "name"=> "I See Stars",
            "country"=> "",
            "genre"=> "deathstep",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba1a68cc83c9817fb5796b42a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a1a68cc83c9817fb5796b42a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a1a68cc83c9817fb5796b42a",
            "spotify_id"=> "3iCJOi5YKh247eutgCyLFe"
          ],
          [
            "name"=> "Sean Paul",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273bb74893cb87afdd8eefe6e1f",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02bb74893cb87afdd8eefe6e1f",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851bb74893cb87afdd8eefe6e1f",
            "spotify_id"=> "2ZVEnkCKF0ytNHpj9cLxte"
          ],
          [
            "name"=> "Stevie J",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2730df83579434de7556c7fb52b",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e020df83579434de7556c7fb52b",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048510df83579434de7556c7fb52b",
            "spotify_id"=> "09A1kpyGbzYAPb8cEvee64"
          ],
          [
            "name"=> "Surf Mesa",
            "country"=> "",
            "genre"=> "pop edm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5f8fa258a7afc2d3cbee6584",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745f8fa258a7afc2d3cbee6584",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785f8fa258a7afc2d3cbee6584",
            "spotify_id"=> "1lmU3giNF3CSbkVSQmLpHQ"
          ],
          [
            "name"=> "Cha Se-Eun",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9028440b908977d9f2540484",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749028440b908977d9f2540484",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789028440b908977d9f2540484",
            "spotify_id"=> "1xwzuOCjXewMhixY3UqCR8"
          ],
          [
            "name"=> "Sofiane Pamart",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6fb69b69ee68b47cf2444040",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746fb69b69ee68b47cf2444040",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786fb69b69ee68b47cf2444040",
            "spotify_id"=> "4RB2EEsmLhQTOSVQQpDzNg"
          ],
          [
            "name"=> "Slum Village",
            "country"=> "",
            "genre"=> "alternative hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd3e282b54f0709be5376764a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d3e282b54f0709be5376764a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d3e282b54f0709be5376764a",
            "spotify_id"=> "1020a42xVklY6c56imNcaa"
          ],
          [
            "name"=> "Fernando & Sorocaba",
            "country"=> "",
            "genre"=> "agronejo",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb30a95c784f59bf3f6f3f843e",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517430a95c784f59bf3f6f3f843e",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17830a95c784f59bf3f6f3f843e",
            "spotify_id"=> "1oSgjdbgLYULVmEBojPRw8"
          ],
          [
            "name"=> "Zach Seabaugh",
            "country"=> "",
            "genre"=> "singer-songwriter pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebafa3645cb4ea728df9f0c373",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174afa3645cb4ea728df9f0c373",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178afa3645cb4ea728df9f0c373",
            "spotify_id"=> "3bmlmoASHg6ycjrKV05CP2"
          ],
          [
            "name"=> "Lil Scrappy",
            "country"=> "",
            "genre"=> "atl hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb01efb1833b935f37207c3466",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517401efb1833b935f37207c3466",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17801efb1833b935f37207c3466",
            "spotify_id"=> "5einkgXXrjhfYCyac1FANB"
          ],
          [
            "name"=> "Mike Shinoda",
            "country"=> "",
            "genre"=> "alternative hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb3c3f2fac45447be072333dbd",
            "md_img"=> "https://i.scdn.co/image/ab676161000051743c3f2fac45447be072333dbd",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1783c3f2fac45447be072333dbd",
            "spotify_id"=> "6xBZgSMsnKVmaAxzWEwMSD"
          ],
          [
            "name"=> "Elyssa Smith",
            "country"=> "",
            "genre"=> "deep ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4ffcc0aa2d91565530016f90",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744ffcc0aa2d91565530016f90",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784ffcc0aa2d91565530016f90",
            "spotify_id"=> "0p7lJtfYpKXr9KClOkpRaF"
          ],
          [
            "name"=> "English Baroque Soloists",
            "country"=> "",
            "genre"=> "baroque ensemble",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebfd6d111889a2958d6bce6a4d",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174fd6d111889a2958d6bce6a4d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178fd6d111889a2958d6bce6a4d",
            "spotify_id"=> "3OtZV9aCZ6G004vjOQcf59"
          ],
          [
            "name"=> "Stian Jarrell",
            "country"=> "",
            "genre"=> "christmas instrumental",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2735b1e438a2cda691836cedc33",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e025b1e438a2cda691836cedc33",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048515b1e438a2cda691836cedc33",
            "spotify_id"=> "7xbTF9Vk9lIWrYFwZgeX9v"
          ],
          [
            "name"=> "Sarah Cothran",
            "country"=> "",
            "genre"=> "gen z singer-songwriter",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8757b57a538ada0f0c691290",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748757b57a538ada0f0c691290",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788757b57a538ada0f0c691290",
            "spotify_id"=> "3kft86DbqCNr7rjq3pEj0G"
          ],
          [
            "name"=> "Boz Scaggs",
            "country"=> "",
            "genre"=> "classic rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb143feea39a3275bfc4ea5f11",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174143feea39a3275bfc4ea5f11",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178143feea39a3275bfc4ea5f11",
            "spotify_id"=> "46njgd2Rq9tZc4ZjeQMgbh"
          ],
          [
            "name"=> "Sidewalks and Skeletons",
            "country"=> "",
            "genre"=> "wave",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb36bbe10c0995ffffbe82c1c6",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517436bbe10c0995ffffbe82c1c6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17836bbe10c0995ffffbe82c1c6",
            "spotify_id"=> "48nHO1cuTbpx4ELhChsxX1"
          ],
          [
            "name"=> "SAYGRACE",
            "country"=> "",
            "genre"=> "r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb43918d05085c08839f4cf145",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517443918d05085c08839f4cf145",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17843918d05085c08839f4cf145",
            "spotify_id"=> "6y5amJcTjeDgLXIjtQLMst"
          ],
          [
            "name"=> "The Ink Spots",
            "country"=> "",
            "genre"=> "lounge",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273383811a9b3081023c612fb7b",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02383811a9b3081023c612fb7b",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851383811a9b3081023c612fb7b",
            "spotify_id"=> "5bOsFzuJ6QZMr86ezC4oXY"
          ],
          [
            "name"=> "Barry Snyder Band",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd47da7212064b8fbe2c00629",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d47da7212064b8fbe2c00629",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d47da7212064b8fbe2c00629",
            "spotify_id"=> "5xmw30TV4tlHFIOH6HmPnd"
          ],
          [
            "name"=> "Supermode",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb5576566c73b0f2bb4e3d84f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b5576566c73b0f2bb4e3d84f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b5576566c73b0f2bb4e3d84f",
            "spotify_id"=> "7urnl0uH1w3NCoErxw7AUK"
          ],
          [
            "name"=> "Siinamota",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273a89cda77ec382a3e365cb3f5",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02a89cda77ec382a3e365cb3f5",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851a89cda77ec382a3e365cb3f5",
            "spotify_id"=> "4qfQTMwNNuBKJ4rF9Lo4bD"
          ],
          [
            "name"=> "Make Them Suffer",
            "country"=> "",
            "genre"=> "australian metalcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb919ca818e5d5236acad1d269",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174919ca818e5d5236acad1d269",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178919ca818e5d5236acad1d269",
            "spotify_id"=> "0FZcPgWI3BsFQl4rOAGSHT"
          ],
          [
            "name"=> "Tyler Shaw",
            "country"=> "",
            "genre"=> "pop quebecois",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebef5e0f290701dee0a92b7076",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174ef5e0f290701dee0a92b7076",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178ef5e0f290701dee0a92b7076",
            "spotify_id"=> "3jERgGiTwNAPxNmDasAb31"
          ],
          [
            "name"=> "Seori",
            "country"=> "",
            "genre"=> "korean r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6807bb7c7282b00fc618d598",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746807bb7c7282b00fc618d598",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786807bb7c7282b00fc618d598",
            "spotify_id"=> "2bWTIIQP9zaVc55RaMGu7e"
          ],
          [
            "name"=> "Sergei Prokofiev",
            "country"=> "",
            "genre"=> "classical",
            "bg_img"=> "https://i.scdn.co/image/c3b40885e23fd20cfd503871f57172a640d107ea",
            "md_img"=> "https://i.scdn.co/image/3d519206c3e18b8de2d8749988a398ded9a6b625",
            "sm_img"=> "https://i.scdn.co/image/18af66959eb66c7e5c63250fd47520aebbba16a3",
            "spotify_id"=> "4kHtgiRnpmFIV5Tm4BIs8l"
          ],
          [
            "name"=> "Patrick Stump",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc2339104ae0e8ec19a3d19b1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c2339104ae0e8ec19a3d19b1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c2339104ae0e8ec19a3d19b1",
            "spotify_id"=> "0wsdUS0EJ7zHgti2nxTVWR"
          ],
          [
            "name"=> "Stephen Dawes",
            "country"=> "",
            "genre"=> "singer-songwriter pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb08646369f2b6709de497a1a5",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517408646369f2b6709de497a1a5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17808646369f2b6709de497a1a5",
            "spotify_id"=> "3jTU1IOqkO7Mz4zdbXPose"
          ],
          [
            "name"=> "El Cherry Scom",
            "country"=> "",
            "genre"=> "dembow",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd0d7feda31ece2b19d7282b2",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d0d7feda31ece2b19d7282b2",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d0d7feda31ece2b19d7282b2",
            "spotify_id"=> "1tfhFc2Y8iplDKCteuXjCY"
          ],
          [
            "name"=> "Nina Sky",
            "country"=> "",
            "genre"=> "hip pop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebc4d1f6eb290474ff0510da83",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174c4d1f6eb290474ff0510da83",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178c4d1f6eb290474ff0510da83",
            "spotify_id"=> "6eBYLQONaYZhZNAVK061t6"
          ],
          [
            "name"=> "Neutro Shorty",
            "country"=> "",
            "genre"=> "trap latino",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb580d13ffc0b5961e93ae5a80",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174580d13ffc0b5961e93ae5a80",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178580d13ffc0b5961e93ae5a80",
            "spotify_id"=> "5wUO3A6DT4tO5UDz21kE2Y"
          ],
          [
            "name"=> "Young Scooter",
            "country"=> "",
            "genre"=> "atl trap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba92577640045c4dd4d455a91",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a92577640045c4dd4d455a91",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a92577640045c4dd4d455a91",
            "spotify_id"=> "4cmA2QDPdzh8W2ytpyUGes"
          ],
          [
            "name"=> "Janos Sebestyen",
            "country"=> "",
            "genre"=> "harpsichord",
            "bg_img"=> "https://i.scdn.co/image/1caf6247d176253e60fe27c8738201c92a06a89c",
            "md_img"=> "https://i.scdn.co/image/38c4f1e302780bb9e6d9b5ba72a337c73cc8f304",
            "sm_img"=> "https://i.scdn.co/image/0938fc6e648714aed6f56bd9d52b0faeedfb84be",
            "spotify_id"=> "3XqsvVsJuMXQsfVwpYZLFZ"
          ],
          [
            "name"=> "Slade",
            "country"=> "",
            "genre"=> "glam rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb11bfa6c1dc072571dd8386b5",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517411bfa6c1dc072571dd8386b5",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17811bfa6c1dc072571dd8386b5",
            "spotify_id"=> "10n5lhNDoSMUHWLlnST1yw"
          ],
          [
            "name"=> "Sik World",
            "country"=> "",
            "genre"=> "rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb42178ea0fe78f5e6136caf67",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517442178ea0fe78f5e6136caf67",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17842178ea0fe78f5e6136caf67",
            "spotify_id"=> "39G9Mcs99KhOEtVuthwztS"
          ],
          [
            "name"=> "Snow",
            "country"=> "",
            "genre"=> "canadian old school hip hop",
            "bg_img"=> "https://i.scdn.co/image/9d0dec8e40b3e19bb48690caf3d8f9deec7b9ef4",
            "md_img"=> "https://i.scdn.co/image/5e746506b22948140cc0f760a33aebad4106ad96",
            "sm_img"=> "https://i.scdn.co/image/c6e56aaa2bbc7690ab4a49f99769ba907eeba030",
            "spotify_id"=> "3uZFBSsMiooimnprFL9jD1"
          ],
          [
            "name"=> "Dj Samir",
            "country"=> "",
            "genre"=> "remix brasileiro",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe147c5848bcdf261ede0df0f",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e147c5848bcdf261ede0df0f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e147c5848bcdf261ede0df0f",
            "spotify_id"=> "6U0dJxYVB41L8WDZ02Nwuk"
          ],
          [
            "name"=> "Cornelio Vega y su Dinastia",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9951bb304f7358f061a49993",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749951bb304f7358f061a49993",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789951bb304f7358f061a49993",
            "spotify_id"=> "3xNhaqwvNIAP57dWgMTP1d"
          ],
          [
            "name"=> "Emeli Sandé",
            "country"=> "",
            "genre"=> "r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf26a49a45ad43119b4409d7c",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f26a49a45ad43119b4409d7c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f26a49a45ad43119b4409d7c",
            "spotify_id"=> "7sfgqEdoeBTjd8lQsPT3Cy"
          ],
          [
            "name"=> "State Champs",
            "country"=> "",
            "genre"=> "anthem emo",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe7425b5afa1532c080bd6753",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e7425b5afa1532c080bd6753",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e7425b5afa1532c080bd6753",
            "spotify_id"=> "1qqdO7xMptucPDMopsOdkr"
          ],
          [
            "name"=> "Saosin",
            "country"=> "",
            "genre"=> "neon pop punk",
            "bg_img"=> "https://i.scdn.co/image/6f005f88cc2268338fdb96bd80d0a1a4043d943e",
            "md_img"=> "https://i.scdn.co/image/d5595e7199eb6649c195b403b4b422f69d3998d4",
            "sm_img"=> "https://i.scdn.co/image/a5c0c83b83024e3397e5ef5b9b606511d79113ec",
            "spotify_id"=> "1NUOfvAhA9AvsF1ISMkgHX"
          ],
          [
            "name"=> "Motion City Soundtrack",
            "country"=> "",
            "genre"=> "emo",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebb464a5da97e159647cc4be76",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174b464a5da97e159647cc4be76",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178b464a5da97e159647cc4be76",
            "spotify_id"=> "19zqV9DV3txjMUjHvltl2D"
          ],
          [
            "name"=> "Sushi Soucy",
            "country"=> "",
            "genre"=> "pixel",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbf82600c9989b9d04019d125",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bf82600c9989b9d04019d125",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bf82600c9989b9d04019d125",
            "spotify_id"=> "1EbbJiG9LzlH2i7fCjhkvv"
          ],
          [
            "name"=> "Shadab Faridi",
            "country"=> "",
            "genre"=> "modern bollywood",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2b5d884ed84e63a38df6d636",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742b5d884ed84e63a38df6d636",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782b5d884ed84e63a38df6d636",
            "spotify_id"=> "6WixbETKEXH0xBf0OB9kRB"
          ],
          [
            "name"=> "Starlito",
            "country"=> "",
            "genre"=> "nashville hip hop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb46d21c66ed3abc4df5d10b3c",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517446d21c66ed3abc4df5d10b3c",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17846d21c66ed3abc4df5d10b3c",
            "spotify_id"=> "4SjND9kT6Ja5TSPZTyUUab"
          ],
          [
            "name"=> "Iceland Symphony Orchestra",
            "country"=> "",
            "genre"=> "nordic orchestra",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb4b09d469d3705a486f6d1aa6",
            "md_img"=> "https://i.scdn.co/image/ab676161000051744b09d469d3705a486f6d1aa6",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1784b09d469d3705a486f6d1aa6",
            "spotify_id"=> "3RPu1pwXXrPqamAp6OHZ8b"
          ],
          [
            "name"=> "Laura Sullivan",
            "country"=> "",
            "genre"=> "classify",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6b30d45e034661a911ec2447",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746b30d45e034661a911ec2447",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786b30d45e034661a911ec2447",
            "spotify_id"=> "2leLOUpqlp2g65Guf8IqEv"
          ],
          [
            "name"=> "Ninja Sex Party",
            "country"=> "",
            "genre"=> "comic",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb9618a94f3ace9f70baab3fb7",
            "md_img"=> "https://i.scdn.co/image/ab676161000051749618a94f3ace9f70baab3fb7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1789618a94f3ace9f70baab3fb7",
            "spotify_id"=> "3jsyANBBy6gOZUSQhiGclx"
          ],
          [
            "name"=> "Smokey Robinson",
            "country"=> "",
            "genre"=> "classic soul",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb33407ef4e12458e2cf1bcb2f",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517433407ef4e12458e2cf1bcb2f",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17833407ef4e12458e2cf1bcb2f",
            "spotify_id"=> "0h9smro0z3HqUbD94jotU8"
          ],
          [
            "name"=> "Pearl Sky",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273464eb68b90d2996685f0db54",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02464eb68b90d2996685f0db54",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851464eb68b90d2996685f0db54",
            "spotify_id"=> "0U2WJ8NctnlkWeIchi9FQB"
          ],
          [
            "name"=> "Mika Singh",
            "country"=> "",
            "genre"=> "filmi",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb1eb5c386868ef7a975c04620",
            "md_img"=> "https://i.scdn.co/image/ab676161000051741eb5c386868ef7a975c04620",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1781eb5c386868ef7a975c04620",
            "spotify_id"=> "5T2I75UlGBcWd5nVyfmL13"
          ],
          [
            "name"=> "Sonny Magic Trio",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273ea33439e1a1e00459335e91c",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02ea33439e1a1e00459335e91c",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851ea33439e1a1e00459335e91c",
            "spotify_id"=> "5UBpgvMO0TGIUiuD69RAP3"
          ],
          [
            "name"=> "Lø Spirit",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebcaf60b80f9efcec53f24b6da",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174caf60b80f9efcec53f24b6da",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178caf60b80f9efcec53f24b6da",
            "spotify_id"=> "7cImXesjInq0e25gQLHWoV"
          ],
          [
            "name"=> "Beto Y Sus Canarios",
            "country"=> "",
            "genre"=> "musica mexicana",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebd57f9dc337b4cafbbb4acb0a",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174d57f9dc337b4cafbbb4acb0a",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178d57f9dc337b4cafbbb4acb0a",
            "spotify_id"=> "1Y4RbL9WTMzu0TTobNbNSv"
          ],
          [
            "name"=> "Savannah Dexter",
            "country"=> "",
            "genre"=> "redneck",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb48c6095a468802ebbb442f90",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517448c6095a468802ebbb442f90",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17848c6095a468802ebbb442f90",
            "spotify_id"=> "1e2nwjPRhYpmY7m906NFwz"
          ],
          [
            "name"=> "Seth Anthony",
            "country"=> "",
            "genre"=> "redneck",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba3b681dc20ecd3ba01dcd154",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a3b681dc20ecd3ba01dcd154",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a3b681dc20ecd3ba01dcd154",
            "spotify_id"=> "69fyBUeaP6u5zUKxhJi2wo"
          ],
          [
            "name"=> "Brian Setzer",
            "country"=> "",
            "genre"=> "heartland rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb140f487609faafb6de3c7964",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174140f487609faafb6de3c7964",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178140f487609faafb6de3c7964",
            "spotify_id"=> "4xiBg5AwhlWtuxAJO9rO6f"
          ],
          [
            "name"=> "SkyDxddy",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebf8b8bd48be442a6d4e8d2cbf",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174f8b8bd48be442a6d4e8d2cbf",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178f8b8bd48be442a6d4e8d2cbf",
            "spotify_id"=> "2xe5FZM6bB4k1KhfTZBBSx"
          ],
          [
            "name"=> "South Noon",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27384843c9d11f8ee2744a795bb",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0284843c9d11f8ee2744a795bb",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485184843c9d11f8ee2744a795bb",
            "spotify_id"=> "0V4IA3EpmXCk58fcNVYFA6"
          ],
          [
            "name"=> "Old Sea Brigade",
            "country"=> "",
            "genre"=> "indie anthem-folk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb639835243d3488207f4b8948",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174639835243d3488207f4b8948",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178639835243d3488207f4b8948",
            "spotify_id"=> "6vUNwmljZAcn7tNtUoxG45"
          ],
          [
            "name"=> "State of Mine",
            "country"=> "",
            "genre"=> "gymcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eba463cbc62d343dc7dc866ee1",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174a463cbc62d343dc7dc866ee1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178a463cbc62d343dc7dc866ee1",
            "spotify_id"=> "78u21hh7csceByaxzd7pbh"
          ],
          [
            "name"=> "SCXR SOUL",
            "country"=> "",
            "genre"=> "drift phonk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb5c7fc6a53a5c35d6284e11e9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051745c7fc6a53a5c35d6284e11e9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1785c7fc6a53a5c35d6284e11e9",
            "spotify_id"=> "6yxKWJK7XtaOMK2j9FXqSC"
          ],
          [
            "name"=> "Banda Sinaloense Los Recoditos",
            "country"=> "",
            "genre"=> "banda",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b273c28e870caf96a09fbbba419d",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e02c28e870caf96a09fbbba419d",
            "sm_img"=> "https://i.scdn.co/image/ab67616d00004851c28e870caf96a09fbbba419d",
            "spotify_id"=> "7IUkPNJ8qmoD5i3TcRYpXF"
          ],
          [
            "name"=> "Sky Travis",
            "country"=> "",
            "genre"=> "color noise",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2731fbd82392c5ee5cb1468fb8c",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e021fbd82392c5ee5cb1468fb8c",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048511fbd82392c5ee5cb1468fb8c",
            "spotify_id"=> "5IkHDfUNRiqyATjgbDHuGy"
          ],
          [
            "name"=> "Spacey Jane",
            "country"=> "",
            "genre"=> "australian indie rock",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb7bf39478410008fa1eea87dc",
            "md_img"=> "https://i.scdn.co/image/ab676161000051747bf39478410008fa1eea87dc",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1787bf39478410008fa1eea87dc",
            "spotify_id"=> "6V70yeZQCoSR2M3fyW8qiA"
          ],
          [
            "name"=> "SMU",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb8b130bd775657310f99de9c9",
            "md_img"=> "https://i.scdn.co/image/ab676161000051748b130bd775657310f99de9c9",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1788b130bd775657310f99de9c9",
            "spotify_id"=> "2qATSoNFfzMaTEZFfJpG4c"
          ],
          [
            "name"=> "Sleep Sounds of Nature",
            "country"=> "",
            "genre"=> "environmental",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb6e926f75f794d6df9aef79c7",
            "md_img"=> "https://i.scdn.co/image/ab676161000051746e926f75f794d6df9aef79c7",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1786e926f75f794d6df9aef79c7",
            "spotify_id"=> "59FRAcMcsHQupc8lupy5uH"
          ],
          [
            "name"=> "Fresh Water Sounds",
            "country"=> "",
            "genre"=> "environmental",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb20b508e264fead9b0b7deab1",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517420b508e264fead9b0b7deab1",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17820b508e264fead9b0b7deab1",
            "spotify_id"=> "2qL9AGTy8Mr016YBC0dvGV"
          ],
          [
            "name"=> "SoMo",
            "country"=> "",
            "genre"=> "pop r&b",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebafbfe11dca2d3a5b27092161",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174afbfe11dca2d3a5b27092161",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178afbfe11dca2d3a5b27092161",
            "spotify_id"=> "5AtWO8IEnjhRLzaVVQxFUs"
          ],
          [
            "name"=> "Sarah Reeves",
            "country"=> "",
            "genre"=> "ccm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebbb1e5b0fbcb73544d8d099d8",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174bb1e5b0fbcb73544d8d099d8",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178bb1e5b0fbcb73544d8d099d8",
            "spotify_id"=> "2vGA5qCDLZGW6exRQgKfLL"
          ],
          [
            "name"=> "Stephen Sondheim",
            "country"=> "",
            "genre"=> "broadway",
            "bg_img"=> "https://i.scdn.co/image/97b2e7b07036ba437d322b38153078d62b1c7390",
            "md_img"=> "https://i.scdn.co/image/68660c8adfa4a242e185854c769b1ed7675f026d",
            "sm_img"=> "https://i.scdn.co/image/d0918d466a2e3008b3eae129c92f4aeed0ef694a",
            "spotify_id"=> "4TbtUt49IMXEIMmNdifHb1"
          ],
          [
            "name"=> "Silent Planet",
            "country"=> "",
            "genre"=> "christian metalcore",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb85ffd133b82ebf688dc5f443",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517485ffd133b82ebf688dc5f443",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17885ffd133b82ebf688dc5f443",
            "spotify_id"=> "0JGTiwfinlCuANGu4Gq2XU"
          ],
          [
            "name"=> "Denis Solee",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb357fb341364f324c6cf83517",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174357fb341364f324c6cf83517",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178357fb341364f324c6cf83517",
            "spotify_id"=> "2D90eAxzLfSL7KkvptyUtF"
          ],
          [
            "name"=> "Skusta Clee",
            "country"=> "",
            "genre"=> "opm",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5ebe3bed8cfdbf475c7c7396729",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174e3bed8cfdbf475c7c7396729",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178e3bed8cfdbf475c7c7396729",
            "spotify_id"=> "117XFtbZPnCI1EYKjYZWJc"
          ],
          [
            "name"=> "Scrim",
            "country"=> "",
            "genre"=> "cloud rap",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb2f94f9d081f72bf717d4474d",
            "md_img"=> "https://i.scdn.co/image/ab676161000051742f94f9d081f72bf717d4474d",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f1782f94f9d081f72bf717d4474d",
            "spotify_id"=> "5VKvqCyBxqbaXUp8eK0aUy"
          ],
          [
            "name"=> "SHAED",
            "country"=> "",
            "genre"=> "electropop",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb28934c2662a90c096e062763",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517428934c2662a90c096e062763",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17828934c2662a90c096e062763",
            "spotify_id"=> "3KwmxIhSe9UTSEF37kwngR"
          ],
          [
            "name"=> "Silkyson",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b27303a06e5fe0e916e4e4173705",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e0203a06e5fe0e916e4e4173705",
            "sm_img"=> "https://i.scdn.co/image/ab67616d0000485103a06e5fe0e916e4e4173705",
            "spotify_id"=> "3fJ05kTiWPBQXPk7WoOhX1"
          ],
          [
            "name"=> "照井順政",
            "country"=> "",
            "genre"=> "null",
            "bg_img"=> "https://i.scdn.co/image/ab67616d0000b2736c9542310b44d4d1a3ac82ed",
            "md_img"=> "https://i.scdn.co/image/ab67616d00001e026c9542310b44d4d1a3ac82ed",
            "sm_img"=> "https://i.scdn.co/image/ab67616d000048516c9542310b44d4d1a3ac82ed",
            "spotify_id"=> "1ACBFDo26YToaKa2AhEJGX"
          ],
          [
            "name"=> "SHADXWBXRN",
            "country"=> "",
            "genre"=> "drift phonk",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb502767d47d40f3bbfba25a03",
            "md_img"=> "https://i.scdn.co/image/ab67616100005174502767d47d40f3bbfba25a03",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f178502767d47d40f3bbfba25a03",
            "spotify_id"=> "5ZzO786ViqgegCIoa28OPx"
          ],
          [
            "name"=> "The Fisk Jubilee Singers",
            "country"=> "",
            "genre"=> "spirituals",
            "bg_img"=> "https://i.scdn.co/image/ab6761610000e5eb59d5d0934806882f6cbbdd42",
            "md_img"=> "https://i.scdn.co/image/ab6761610000517459d5d0934806882f6cbbdd42",
            "sm_img"=> "https://i.scdn.co/image/ab6761610000f17859d5d0934806882f6cbbdd42",
            "spotify_id"=> "0UGSKGxAJfltNONQ4AtETL"
          ]
        
        ];
       

        $transformed = $artise;
        // $transformed2 = $artise2;
        // $transformed3 = $artise3;
        //collect(sgenre)
            // ->map(fn (array sprofession) => [
            //     'name' => sprofession['name'],
            //     'slug' => str(sprofession['name'])->slug(),
            // ])->toArray();

        DB::table('artises')->insertOrIgnore($transformed);
        // DB::table('artises')->insertOrIgnore($transformed2);
        // DB::table('artises')->insertOrIgnore($transformed3);
    }
}
