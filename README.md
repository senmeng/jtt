# jd_union
京东客、京东联盟、京东API、京推推

工厂类

    namespace app\common\factory;
    use mengsen\jtt\TopClient;

    class Jtt
    {
        private static $obj = null;
        public static function getInstance()
        {
            if (self::$obj == null) {
                $conf = config('jd.union');
                $app = new TopClient($conf['appkey'], $conf['secretKey']);
                self::$obj = $app;
            }
            return self::$obj;
        }
    }


DEMO

    $app = Jtt::getInstance();
    $res = $app->execute('api/get_goods_link', [
        'unionid' => '1937243904',
        'gid' => $param['gid'],
    ]);
