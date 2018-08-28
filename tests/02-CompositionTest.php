<?php

require_once(__DIR__."/../src/02-Page.php");
require_once(__DIR__."/../src/02-Table.php");

class CompositionTest extends \PHPUnit\Framework\TestCase {
        public function testComposition00() {
                // arrange
                $expected = '<html><head><title>Default Page</title></head><body><div>Header</div><table id="maincontent" width="100%"><tr bgcolor="#eeeeee"><td>0</td></tr><tr bgcolor="#ffcc00"><td>1</td></tr><tr bgcolor="#eeeeee"><td>2</td></tr><tr bgcolor="#ffcc00"><td>3</td></tr><tr bgcolor="#eeeeee"><td>4</td></tr><tr bgcolor="#ffcc00"><td>5</td></tr><tr bgcolor="#eeeeee"><td>6</td></tr><tr bgcolor="#ffcc00"><td>7</td></tr><tr bgcolor="#eeeeee"><td>8</td></tr><tr bgcolor="#ffcc00"><td>9</td></tr><tr bgcolor="#eeeeee"><td>10</td></tr><tr bgcolor="#ffcc00"><td>11</td></tr><tr bgcolor="#eeeeee"><td>12</td></tr><tr bgcolor="#ffcc00"><td>13</td></tr><tr bgcolor="#eeeeee"><td>14</td></tr><tr bgcolor="#ffcc00"><td>15</td></tr><tr bgcolor="#eeeeee"><td>16</td></tr><tr bgcolor="#ffcc00"><td>17</td></tr><tr bgcolor="#eeeeee"><td>18</td></tr><tr bgcolor="#ffcc00"><td>19</td></tr><tr bgcolor="#eeeeee"><td>20</td></tr></table>';
                $page = new Page();
                $page->makeHeader("<div>Header</div>");

                $table = $page->makeBody(range(0, 20));
                $table->setId("maincontent");
                $table->build("#ffcc00", "#eeeeee");
                // act
                $actual = $page->display();
                // assert
                $this->assertEquals($expected, $actual);
        }
}
