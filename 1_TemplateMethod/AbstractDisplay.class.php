<?php
/**
 * AbstractClassクラスに相当する
 */
abstract class AbstractDisplay
{
    /**
     * 表示するデータ
     */
    private $data;

    /**
     * コンストラクタ
     * @param mixed 表示するデータ
     */
    public function __construct($data)
    {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /**
     * template methodに相当する
     */
    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * データを取得する
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * ヘッダを表示する
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayHeader();

    /**
     * ボディ（クライアントから渡された内容）を表示する
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayBody();

    /**
     * フッタを表示する
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayFooter();

}