<?php

namespace Blog\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAdvertisementData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objects = \Nelmio\Alice\Fixtures::load(
            __DIR__ . '/advertisement.yml',
            $manager, array(
                'providers' => array($this)
            )
        );
    }

    public function newContent()
    {
        $news = array(
            'Организм Пеле хорошо реагирует на антибиотики, через несколько дней врачи решат, как дальше лечить бразильца
            Легендарный бразильский футболист Пеле в настоящий момент не проходит курс гемодиализа, состояние трехкратного чемпиона мира улучшается.
            Пеле, с понедельника находящийся в больнице Альберта Эйнштейна из-за инфекционного заболевания мочевыводящих путей, был переведен в специальную палату,
            после того как его состояние ухудшилось. Ранее сообщалось, что врачи вынуждены были прибегнуть к гемодиализу.
            Пеле находится в палате интенсивной терапии, в течение ближайших нескольких дней будет проведена оценка его состояния, чтобы понять, необходим ли гемодиализ.
            В заявлении представителей госпиталя отмечается, что организм Пеле хорошо реагирует на антибиотики.',

            'Организм Пеле хорошо реагирует на антибиотики, через несколько дней врачи решат, как дальше лечить бразильца
            Легендарный бразильский футболист Пеле в настоящий момент не проходит курс гемодиализа, состояние трехкратного чемпиона мира улучшается.
            Пеле, с понедельника находящийся в больнице Альберта Эйнштейна из-за инфекционного заболевания мочевыводящих путей, был переведен в специальную палату, после
            ого как его состояние ухудшилось. Ранее сообщалось, что врачи вынуждены были прибегнуть к гемодиализу.
            Пеле находится в палате интенсивной терапии, в течение ближайших нескольких дней будет проведена оценка его состояния, чтобы понять, необходим ли гемодиализ.
            В заявлении представителей госпиталя отмечается, что организм Пеле хорошо реагирует на антибиотики.',

            'По словам Шимкива, от технологий 3G-интернета Украину отделяет подпись премьер-министра Арсения Яценюка и постановление Кабинета министров под изменениями к постановлению
            правительства, которое регламентирует условия выдачи лицензий на 3G. Эти изменения уже готовы и согласованы с другими госучреждениями.
            Сегодня все готово, все готовы. Вся проблема - в документе, который должен подписать премьер-министр.
            Вот премьер подпишет это, или может уже подписал, но об этом не сообщается, на заседании Кабинета министров это не
            обсуждалось, тогда тендер может начаться, если произойдет чудо, в середине декабря. А потом еще
            (нужно время на - Ред.)',

            'По словам Шимкива, от технологий 3G-интернета Украину отделяет подпись премьер-министра Арсения Яценюка и постановление Кабинета министров под изменениями к постановлению
            правительства, которое регламентирует условия выдачи лицензий на 3G. Эти изменения уже готовы и согласованы с другими госучреждениями.
            Сегодня все готово, все готовы. Вся проблема - в документе, который должен подписать премьер-министр.
            Вот премьер подпишет это, или может уже подписал, но об этом не сообщается, на заседании Кабинета министров это не
            обсуждалось, тогда тендер может начаться, если произойдет чудо, в середине декабря. А потом еще
            (нужно время на - Ред.)',
        );

        return $news[array_rand($news)];
    }

    public function newTitle()
    {
        $titles = array(
            'Организм Пеле хорошо реагирует на антибиотики',
            'Организм Пеле хорошо реагирует на антибиотики',
            'Организм Пеле хорошо реагирует на антибиотики',
            'По словам Шимкива, от технологий 3G-интернета Украину',
            'По словам Шимкива, от технологий 3G-интернета Украину',
            'По словам Шимкива, от технологий 3G-интернета Украину',
            'По словам Шимкива, от технологий 3G-интернета Украину',
            'По словам Шимкива, от технологий 3G-интернета Украину',
        );

        return $titles[array_rand($titles)];
    }
}
