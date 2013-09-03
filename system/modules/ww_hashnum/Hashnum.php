<?php
 
 class Hashnum extends Frontend
 {
    public function replaceHashnum($strTag)
    {
		global $objPage;
        $arrSplit = explode('::', $strTag);
        if ($arrSplit[0] == 'hashnum')
        {
            if ((isset($arrSplit[1])) && ($arrSplit[1] == 'page'))
            {

				$this->import('Database');
				$page = $this->Database
					->prepare("SELECT hashnum FROM tl_page WHERE id = ?")
					->limit(1)
					->execute($objPage->id);
				
                return $page->hashnum;
			}
        }        
        return false;
      }
 }
 ?>