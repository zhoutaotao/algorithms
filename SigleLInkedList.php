<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2019-07-06
 * Time: 18:21
 */

class SigleLInkedList
{
    /**
     * 单链表 头结点（哨兵结点）
     *
     * @ signglelinkedlistnode
     */
    public  $head;

    /**
     * 单链表长度
     *
     */

    private  $length;

    /**
     * 初始化单链表
     */

    public function __construct($head=null)
    {
        if(null == $head){
            $this->head = new SingleLinkedListNode();
        }else{
            $this->head = $head;
        }
        $this->length = 0;
    }

    /**
     * 获取链表长度
     *
     * @return int
     */

    public function getLength(){
        return $this->length;
    }

    /**
     * 插入数据 采用头插入法 插入新数据
     *
     * @param $data
     * @return SingleLinkedListNode|bool
     */
    public function insert($data){
        return $this->insertDataAfter($this->head,$data);
    }

    /**
     * 删除结点
     *
     * @return bool
     */
    public function delete(SigleLInkedListNode $node){
        if(null == $node){
            return false;
        }
        //获取待删除结点的前置结点
        $preNode = $this->getPreNode($node);

        //修改指针指向
        $preNode->next = $node->next;
        unset($node);

        //长度减一
        $this->length--;
        return ture;
    }
    /**
     * 通过索引获取结点
     *
     * @param int $index
     *
     * @return SigleLInkedListNode|null
     */
    public function getNodeIndex($index){
        if($index >= $this->length){
            return null;
        }

        //指针
        $cur = $this->head->next;
        for($i = 0;$i<$index;$i++){
            $cur = $cur->next;
        }
        return $cur;
    }


}